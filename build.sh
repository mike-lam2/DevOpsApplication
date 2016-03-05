cd /var/www/html/DevOpsApplication
git fetch --all
git reset --hard
chmod a+x ../DevOpsApplication/*.sh
git show --abbrev-commit --no-notes --format=full --no-patch 2>&1 >> WebContent/WEB-INF/version.txt

