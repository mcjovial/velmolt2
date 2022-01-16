ALTER TABLE `w_history` ADD `next_settlement` VARCHAR(32) NULL AFTER `details`;
ALTER TABLE `settings` CHANGE `tawk_id` `livechat` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `settings` ADD `next_settlement` VARCHAR(32) NULL AFTER `transfer`, ADD `duration` VARCHAR(32) NULL AFTER `next_settlement`, ADD `period` VARCHAR(32) NULL AFTER `duration`;
UPDATE `settings` SET `duration` = '2', `period` = 'days' WHERE `settings`.`id` = 1;
ALTER TABLE `gateways` DROP `percent_charge`, DROP `rate`;
ALTER TABLE `gateways` CHANGE `fixed_charge` `charge` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `plan` ADD `interest` VARCHAR(32) NULL AFTER `bonus`;

<!doctype html>
<title>Site Maintenance</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; The Team</p>
    </div>
</article>