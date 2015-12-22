<?php
class ReflectionUtil {

	public static function createObject($objectName, $parameters) {
		$class = new ReflectionClass($objectName);
		$cons = $class->getConstructor();
		if (empty($cons)) {
			return $class->newInstance();
		} else {
			if ($cons->isPrivate() || $cons->isProtected()) {
				return null;
			}
			$params = $cons->getParameters();
			$num = count($params);
			if ($num > 1) {
				if (is_array($parameters)) {
					return $class->newInstanceArgs($parameters);
				} else {
					return null;
				}
			} else {
				return $class->newInstance($parameters);
			}
		}

	}

	public static function callMethod($object, $methodName, $parameters = null) {

		if (!is_object($object) || !is_string($methodName)) {
			return null;
		}
		$method = new ReflectionMethod($object, $methodName);
		if ($method->isPrivate()) {
			return null;
		}
		if ($method->isProtected()) {
			return null;
		}
		$params = $method->getParameters();
		$num = count($params);
		if ($num > 1) {
			if (is_array($parameters)) {
				return $method->invokeArgs($object, $parameters);
			} else {
				return null;
			}
		} else {
			return $method->invoke($object, $parameters);
		}
	}

	public static function setProperty($object, $propertyName, $value) {
		if (!is_object($object) || !is_string($propertyName)) {
			return;
		}
		if (property_exists($object, $propertyName)) {
			$object->$propertyName = $value;
		}
	}
}
?>