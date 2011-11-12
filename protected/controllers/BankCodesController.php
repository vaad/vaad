<?php

class BankCodesController extends GxController {

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'BankCodes'),
        ));
    }

    public function actionCreate() {
        $model = new BankCodes;


        if (isset($_POST['BankCodes'])) {
            $model->setAttributes($_POST['BankCodes']);

            if ($model->save()) {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, 'BankCodes');


        if (isset($_POST['BankCodes'])) {
            $model->setAttributes($_POST['BankCodes']);

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->loadModel($id, 'BankCodes')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('BankCodes');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        $model = new BankCodes('search');
        $model->unsetAttributes();

        if (isset($_GET['BankCodes']))
            $model->setAttributes($_GET['BankCodes']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}