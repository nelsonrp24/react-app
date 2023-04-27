#!/bin/sh -l

echo "::debug :: Debug Message"

echo "::warning :: Warning Message"
echo "::error :: Error Message"

echo "::add-mask:: $1"

echo "This is the input masked: $1"

time=$(date)

# echo "::set-output name=time::$time"    -->> this is deprecated

echo "time=$time" >> $GITHUB_OUTPUT


echo "::group::Some Expandable logs"
echo "some stuff 1"
echo "some stuff 2"
echo "some stuff 3"
echo "::endgroup::"


#echo "::set-env name=HELLO:: thisIsAGreeting"  --> this is deprecated

echo echo "HELLO=thisIsAGreeting" >> "$GITHUB_ENV"