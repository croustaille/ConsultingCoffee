<?php // Vars: $sectorPager

echo $sectorPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($sectorPager as $sector)
{
  echo _open('li.element');

    echo _link($sector);

  echo _close('li');
}

echo _close('ul');

echo $sectorPager->renderNavigationBottom();