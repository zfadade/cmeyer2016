backupDir=/var/tmp/saveMeyer_`date +%Y_%m_%d_%H%M%S`

meyerDir=$HOME/2016
echo "Backing up some files from $HOME to:"
echo "$backupDir"

mkdir -p $backupDir

cp $HOME/*.html $backupDir
cp -R $HOME/includes $backupDir
cp -R $HOME/tools $backupDir

mkdir -p $backupDir/2016
cp $meyerDir/*.php $backupDir/2016

cp -R $meyerDir/locale $backupDir/2016

mkdir -p $backupDir/2016/css
mkdir -p $backupDir/2016/js
cp $meyerDir/js/moretext.js $backupDir/2016/js/moretext.js
cp $meyerDir/css/stylecmco.css $backupDir/2016/css/stylecmco.css
cp $meyerDir/css/consentement.css $backupDir/2016/css/consentement.css

echo "Here are the copied files:"
echo
#ls -ltR $backupDir |less
