<?php

echo __DIR__ . '/' . str_replace('_', '/', $class_name) . '.php';

spl_autoload_register(function ($class_name) {
  include __DIR__ . '/' . str_replace('_', '/', $class_name) . '.php';
});