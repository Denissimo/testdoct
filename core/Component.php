<?php
 /**
 * Created by Valpio.
 * Developer: soulmonk
 * Date: 21.11.13
 */

/**
 * Class Component
 */
class Component
{
    private $_m;

  /**
   * Returns a property value, an event handler list or a behavior based on its name.
   * Do not call this method. This is a PHP magic method that we override
   * to allow using the following syntax to read a property or obtain event handlers:
   * <pre>
   * $value=$component->propertyName;
   * $handlers=$component->eventName;
   * </pre>
   * @param string $name the property name or event name
   * @return mixed the property value, event handlers attached to the event, or the named behavior
   * @throws Exception if the property or event is not defined
   * @see __set
   */
  public function __get($name)
  {
      $getter='get'.$name;
      if (method_exists($this, $getter)) {
          return $this->$getter();
      } elseif (isset($this->_m[$name])) {
          return $this->_m[$name];
      }
      throw new Exception(strtr('Property "{class}.{property}" is not defined.',
      array('{class}'=>get_class($this), '{property}'=>$name)));
  }

  /**
   * Sets value of a component property.
   * Do not call this method. This is a PHP magic method that we override
   * to allow using the following syntax to set a property or attach an event handler
   * <pre>
   * $this->propertyName=$value;
   * $this->eventName=$callback;
   * </pre>
   * @param string $name the property name or the event name
   * @param mixed $value the property value or callback
   * @return mixed
   * @throws Exception if the property/event is not defined or the property is read only.
   * @see __get
   */
  public function __set($name, $value)
  {
      $setter='set'.$name;
      if (method_exists($this, $setter)) {
          return $this->$setter($value);
      }
      if (method_exists($this, 'get'.$name)) {
          throw new Exception(strtr('Property "{class}.{property}" is read only.',
        array('{class}'=>get_class($this), '{property}'=>$name)));
      } else {
          throw new Exception(strtr('Property "{class}.{property}" is not defined.',
        array('{class}'=>get_class($this), '{property}'=>$name)));
      }
  }

  /**
   * Checks if a property value is null.
   * Do not call this method. This is a PHP magic method that we override
   * to allow using isset() to detect if a component property is set or not.
   * @param string $name the property name or the event name
   * @return boolean
   */
  public function __isset($name)
  {
      $getter='get'.$name;
      if (method_exists($this, $getter)) {
          return $this->$getter()!==null;
      }
      return false;
  }

  /**
   * Sets a component property to be null.
   * Do not call this method. This is a PHP magic method that we override
   * to allow using unset() to set a component property to be null.
   * @param string $name the property name or the event name
   * @throws Exception if the property is read only.
   * @return mixed
   */
  public function __unset($name)
  {
      $setter='set'.$name;
      if (method_exists($this, $setter)) {
          $this->$setter(null);
      } elseif (method_exists($this, 'get'.$name)) {
          throw new Exception(strtr('Property "{class}.{property}" is read only.',
        array('{class}'=>get_class($this), '{property}'=>$name)));
      }
  }
}
