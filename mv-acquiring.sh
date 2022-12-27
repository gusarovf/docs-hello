# !/bin/sh
ACQUIRING="acquiring"
ASSETS="assets"
INCLUDES="includes"

ACQUIRING_FOLDER="acquiring.hellopay.online"

rm -rf ../$ACQUIRING_FOLDER &&
mkdir ../$ACQUIRING_FOLDER &&
cp -r ./$ACQUIRING/* ../$ACQUIRING_FOLDER &&
mkdir ../$ACQUIRING_FOLDER/acquiring/ && 
mv ../$ACQUIRING_FOLDER/content ../$ACQUIRING_FOLDER/acquiring/
mv ../$ACQUIRING_FOLDER/card.php ../$ACQUIRING_FOLDER/acquiring/
cp -r ./$ASSETS ../$ACQUIRING_FOLDER &&
cp -r ./$INCLUDES ../$ACQUIRING_FOLDER