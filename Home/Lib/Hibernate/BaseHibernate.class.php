<?php
import("Think.Core.Model");
import("@.Util.ReflectionUtil");

class BaseHibernate extends Model {

	private function setModelProperty($model, $data) {
		foreach ($data as $key => $value) {
			ReflectionUtil::setProperty($model, $key, $value);
		}
	}

	private function createModel($objectName, $data) {
		$model = ReflectionUtil::createObject($objectName, null);
		$this->setModelProperty($model, $data);
		return $model;
	}

	public function addModel($model) {
		$data = array();
		if (is_object($model)) {
			$vars = get_object_vars($model);
			foreach ($vars as $name => $value) {
				$data[$name] = $value;
			}
			return parent::add($data);
		} else {
			return false;
		}
	}

	public function updateModel($model, $condition, $data) {
		$result = false;
		if (empty($condition)) {
			$result = $this->data($data)->save();
		} else {
			$result = $this->where($condition)->data($data)->save();
		}
		if ($result == true && is_object($model)) {
			$this->setModelProperty($model, $data);
		}
		return $result;
	}

	public function findModel($objectName, $condition) {
		$data = $this->where($condition)->find();
		if (empty($data)) {
			return null;
		}
		return $this->createModel($objectName, $data);
	}
}
?>