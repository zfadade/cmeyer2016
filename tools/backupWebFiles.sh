backupDir=/var/tmp/saveMeyer_`date +%Y_%m_%d_%H%M%S`

meyerDir=$HOME/2016
echo "Backing up some files from $HOME and $meyer2016Dir to:"
echo "$backupDir"

mkdir -p $backupDir
cp $HOME/$0 $backupDir
cp $HOME/*.html $backupDir
cp -R $HOME/includes $backupDir
cp -R $HOME/tools $backupDir

mkdir -p $backupDir/2016
cp $meyerDir/*.php $backupDir/2016

cp -R $meyerDir/locale $backupDir/2016

echo "Here are the copied files:"
echo
ls -ltR $backupDir |less
