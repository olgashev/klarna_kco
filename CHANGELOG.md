
2.2.1 / 2019-10-10
==================

  * MAGE-1176 Code cleanup per MEQP1 code sniffer rules

2.2.0 / 2018-10-18
==================

  * PPI-411 Ported the v2 specific stuff from the DACH config.xml.
  * PPI-502 Add support for enabling National identification number as mandatory

2.1.0 / 2018-08-24
==================

  * PPI-147 Add encoding of the item name and reference for V2 API

2.1.0 / 2018-08-08
==================

  * PPI-147 Encode the item name and reference for KCO V2

2.0.0 / 2018-06-29
==================

  * PPI-401 Add Support for multiple checkboxes
  * PPI-406 Fix compatibility between KCO and KP
  * Add additional product details to products (URL & Image)

1.3.0 / 2018-03-28
==================

  * PPI-56 Add support for EMD
  * Add config control for telephone number mandatory

1.2.0 / 2018-02-20
==================

  * Fix incorrect shipping in api request for normal product
  * Fix item price with tax
  * Add error handling api call result
  * Fix incorrect shipping rate sent to API while only one shipping option available
  * Add support for recurring orders

1.1.0 / 2018-01-23
==================

  * Update copyright message
  * Add b2b support

v1.0.11 / 2017-09-08
====================

  * Update code for Marketplace release

v1.0.10 / 2017-06-12
====================

  * Fix so that billing address is sent when default country is not from Nordics
  * Moved the unsetting of border_radius to the builder to prevent it from effecting other markets

v1.0.8 / 2016-12-15
===================

  * Fixed issue where Kred orders are not acknowledged if they're zero dollar orders.

v1.0.7 / 2016-11-18
===================

  * Added support to allow custom order lines to properly be captured and refunded on Kred

v1.0.6 / 2016-11-02
===================

  * PPI-31 Fixed bundles for Kred

v1.0.5 / 2016-10-17
===================

  * PPI-93 Added push ceiling for Kred to auto cancel orders after 2 pushes. This value can be modified via an observer

v1.0.4 / 2016-09-21
===================

  * Fixed issue for failed push notification observer when the order is booked before the push comes in a PHP fatal error can be thrown.

v1.0.3 / 2016-09-19
===================

  * Fixed value of allow_separate_shipping_address to always be sent

v1.0.2 / 2016-09-02
===================

  * Fixed tax rates for Kred on discounts
  * Fixed discount item capture on Kred
  * Added additional observer method to core module to allow the response code to be modified. The Kred module now returns header 200 if the push request was queued
  * Added modman file
  * Removed core module from branch
  * Bundled products on previous version of Magento (below 1.9) will now use simple items rather than a main product.

v1.0.1 / 2016-07-27
===================

  * Fixed bug where the generate update call wasn't triggered the correct observer event
  * Fixed Kred bug: credit_part for shipping fee doesn't work since article number in credit_part call for shipping fee doesn't match article number in reservation: "shipping" vs "shipping_fee".

