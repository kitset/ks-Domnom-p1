#!/bin/bash

sudo git clone https://github.com/kitset/ks-Domnom-p1 /home/Domnom/ks-Domnom-p1
sudo chmod -R 777 /home/Domnom/ks-Domnom-p1
sudo docker-compose -f /home/Domnom/ks-Domnom-p1/docker-compose.yml up -d 
sudo docker exec ksdomnomp1_frontend_1 /var/www/angular/run.sh
sudo docker exec ksdomnomp1_workspace_1 /var/www/laravel/run.sh