import React from 'react'
import { Upload, Icon, Modal, message } from 'antd';

function getBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

export default class UploadImage extends React.Component {
    state = {
        previewVisible: false,
        previewImage: ''
    };

    beforeUpload = (file, fileList) => {
        const isJpgOrPng = file.type === 'image/jpeg' || file.type === 'image/png';
        if (!isJpgOrPng) {
            message.error('You can only upload JPG/PNG file!');
        }
        const isLt2M = file.size / 1024 / 1024 < 0.5;
        if (!isLt2M) {
            message.error('Image must smaller than 2MB!');
        }
        const isLtOrE4F = fileList.length + this.props.fileList.length <= 4;
        if (!isLtOrE4F) {
            message.error('Only 4 images can be uploaded!');
        }
        return new Promise((resolve, reject) => {
            isJpgOrPng && isLt2M && isLtOrE4F ? resolve() : reject()
        })
    }

    handleCancel = () => this.setState({ previewVisible: false });

    handlePreview = async file => {
        if (!file.url && !file.preview) {
            file.preview = await getBase64(file.originFileObj);
        }

        this.setState({
            previewImage: file.url || file.preview,
            previewVisible: true,
        });
    };

    handleChange = (info) => {
        this.props.updateFileList(info.fileList)
    };

    render() {
        const { previewVisible, previewImage } = this.state;
        const uploadButton = (
            <div>
                <Icon type="plus" />
                <div className="ant-upload-text">Upload</div>
            </div>
        );
        return (
            <div className="clearfix">
                {
                    this.props.getFieldDecorator('image', {
                        rules: [{ required: true, message: 'Please input images!' }]
                    })(
                        <Upload
                            name='image'
                            action="https://www.mocky.io/v2/5cc8019d300000980a055e76"
                            listType="picture-card"
                            onPreview={this.handlePreview}
                            beforeUpload={this.beforeUpload}
                            onChange={this.handleChange}
                            multiple={false}
                            fileList={this.props.fileList}
                        >
                            {this.props.fileList.length >= 4 ? null : uploadButton}
                        </Upload>
                    )
                }
                <Modal visible={previewVisible} footer={null} onCancel={this.handleCancel}>
                    <img alt="upload image" style={{ width: '100%' }} src={previewImage} />
                </Modal>
            </div>
        );
    }
}
