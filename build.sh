cd /var/www/html/DevOpsApplication
git fetch --all
git reset --hard origin/master
chmod -R a+r ../DevOpsApplication
chmod -R a+w ../DevOpsApplication
chmod a+x ../DevOpsApplication/*.sh
#11:52 yay it works

