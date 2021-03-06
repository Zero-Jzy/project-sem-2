import React, { Component } from "react";
import { Modal, Button } from 'antd';
import CreateFoodForm from '../forms/CreateFoodForm'

class CreateFoodModal extends Component {
    state = { visible: false };

    showModal = () => {
        this.setState({
            visible: true,
        });
    };

    handleCancel = e => {
        this.setState({
            visible: false,
        });
    };

    onSubmit = a => {
        console.log('value ne :',a)
    };

    render() {
        return (
            <div>
                <Button onClick={this.showModal}>
                    Create new
                </Button>
                <Modal
                    title="Create dish"
                    visible={this.state.visible}
                    onCancel={this.handleCancel}
                    maskClosable={false}
                    footer={null}
                    closable={false}
                >
                    <CreateFoodForm handleCancel={this.handleCancel} onSubmit={this.onSubmit} />
                </Modal>
            </div>
        );
    }
}

export default CreateFoodModal
