<?php

namespace Drupal\blood_sugar\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Prescription entities.
 */
class PrescriptionBSViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
