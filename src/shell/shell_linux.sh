SFNAME=1234
SFPASSE=1234
SFHOST=
SFLOCAL=local


if [ $1 == $SFNAME ] && [ $2 == $SFPASSE ] && [ $3 == $SFLOCAL ]; then
    echo "**************************************************************"
    echo "* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% *"
    echo "* % Vous allez avoir un server en local sur votre machine. % *"
    echo "* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% *"
    echo "**************************************************************"

else [ $1 != $SFNAME ] && [ $2 != $SFPASSE ] && [ $3 != $SFLOCAL ]; then
    echo "|/| ERROR |/|"

fi