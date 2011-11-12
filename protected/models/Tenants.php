<?php

Yii::import('application.models._base.BaseTenants');

class Tenants extends BaseTenants
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
        public function getName($id) {
            $tenant = $this->findByPk($id);
            if ($tenant) 
                return $tenant->tnt_first_name;
            return Yii::t('app','Unknown');
        }
}