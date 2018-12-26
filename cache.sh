sudo rm -rf var/cache/ var/session/
sudo chmod -R 777 .
php bin/console cache:clear
#bin/console pimcore:deployment:classes-rebuild
#php bin/console ecommerce:indexservice:bootstrap --create-or-update-index-structure
#php bin/console ecommerce:indexservice:bootstrap --update-index
sudo chmod -R 0777 .
