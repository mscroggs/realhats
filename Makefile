THIS = realhats
HERE = $(shell pwd)
OUTPUT = $(HERE)
MYTMP = $(HERE)/tmp
TEXOUT = $(OUTPUT)
STYOUT = $(OUTPUT)

.PHONY: all ctan sty doc zip html

all: sty doc ctan html

ctan: sty doc zip

sty:
	mkdir -p $(STYOUT);latex -output-directory=$(STYOUT) realhats.ins

doc:
	mkdir -p $(TEXOUT);pdflatex -output-directory=$(TEXOUT) realhats.dtx

zip:
	mkdir -p $(OUTPUT);rm -rf $(MYTMP);mkdir -p $(MYTMP)/zip/$(THIS);cd $(MYTMP)/zip;cp -r $(HERE)/hats $(THIS);cp -r $(HERE)/readme_images $(THIS);cp $(HERE)/README.md $(TEXOUT)/realhats.pdf $(HERE)/realhats.dtx $(HERE)/realhats.ins $(THIS);zip -r realhats .;cp realhats.zip $(OUTPUT)

html:
	for i in hats/*.png ; do convert "$$i" -resize 100x500 website/"$${i#hats/}" ; done
