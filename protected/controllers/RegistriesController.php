<?php

class RegistriesController extends GxController {

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'Registries'),
        ));
    }

    public function actionIndex() { // old create
        $model = new Registries;
        $model->unsetAttributes();

        //var_dump($_POST); exit;
        if (isset($_POST['Registries'])) {
            $model->setAttributes($_POST['Registries']);

            if ($model->save()) {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else {
                    //EUserFlash::setSuccessMessage('app','Thank you');
                    $this->redirect(Yii::app()->homeUrl, true);
                }
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, 'Registries');
        if (isset($_POST['Registries'])) {
            $model->setAttributes($_POST['Registries']);

            if ($model->save()) {
                $this->redirect(Yii::app()->homeUrl, true);
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->loadModel($id, 'Registries')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actioniOldIndex() {
        $dataProvider = new CActiveDataProvider('Registries');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        $model = new Registries('search');
        $model->unsetAttributes();

        if (isset($_GET['Registries']))
            $model->setAttributes($_GET['Registries']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}