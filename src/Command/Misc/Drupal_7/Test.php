<?php

namespace DrupalCodeGenerator\Command\Misc\Drupal_7;

use DrupalCodeGenerator\Command\ModuleGenerator;

/**
 * Implements misc:d7:test command.
 */
final class Test extends ModuleGenerator {

  protected $name = 'misc:d7:test';
  protected $description = 'Generates Drupal 7 test case';

  /**
   * {@inheritdoc}
   */
  protected function generate(array &$vars): void {
    $this->collectDefault($vars);
    $vars['class'] = $this->ask('Class', '{machine_name|camelize}TestCase');
    $this->addFile('{machine_name}.test', 'test');
  }

}
