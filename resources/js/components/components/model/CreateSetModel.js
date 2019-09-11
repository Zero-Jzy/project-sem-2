import React, { Component } from "react";
import { Modal, Button } from 'antd';
import CreateSetForm from '../forms/CreateSetForm'

class CreateSetModal extends Component {

    onSubmit = a => {
        console.log('value ne :',a)
    };

    render() {
        return (
            <div>
                <Modal
                    title="Create dish"
                    visible={this.props.visible}
                    onCancel={this.props.handleCancel}
                    maskClosable={false}
                    footer={null}
                    closable={false}
                >
                    <CreateSetForm handleCancel={this.props.handleCancel} onSubmit={this.handleOk} />
                </Modal>
            </div>
        );
    }
}

export default CreateSetModal
