# Clean up SiteSucker output
rm _00.txt
rm _downloads.html

find . -iname "*.html" -exec perl -p -i -e 's/\"[^"#]+#\"/"#"/g' {} \;
