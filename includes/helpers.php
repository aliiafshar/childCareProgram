<?php
function render(,  = []) {
  extract();
  ob_start();
  include __DIR__ . '/../../views/' .  . '.php';
  \ = ob_get_clean();
  include __DIR__ . '/../layouts/base.php';
}
