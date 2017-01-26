<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
files: true
fields:

  title:
    label: Title
    type:  text
    width: 1/2
  quote:
    label: Quote
    type:  text
  fuente:
    label: Fuente Quote
    type:  text
  tags:
    label: Tags
    type:  tags
  text:
    label: Text
    type:  textarea
  date:
    label: date
    type: date
