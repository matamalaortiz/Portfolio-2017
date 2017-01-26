<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  limit: 10
  sort: flip
  template:
    - article
fields:

  pageMeta:
    label: Page Meta
    type: headline
  title:
    label: Title
    type:  text
