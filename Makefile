THIS = realhats
HERE = $(shell pwd)
OUTPUT = $(HERE)
MYTMP = $(HERE)/tmp
TEXOUT = $(OUTPUT)
STYOUT = $(OUTPUT)

.PHONY: all sty doc ctan zip

all: sty doc ctan

ctan: sty doc zip

sty:
	mkdir -p $(STYOUT);latex -output-directory=$(STYOUT) realhats.ins

doc:
	mkdir -p $(TEXOUT);pdflatex -output-directory=$(TEXOUT) realhats.dtx

zip:
	mkdir -p $(OUTPUT)
	rm -rf $(MYTMP)
	mkdir -p $(MYTMP)/zip/$(THIS)
	cp -r $(HERE)/hats $(MYTMP)/zip/$(THIS)
	mkdir $(MYTMP)/zip/$(THIS)/readme_images
	cp $(HERE)/readme_images/*.png $(MYTMP)/zip/$(THIS)/readme_images/
	cp $(HERE)/README.md $(TEXOUT)/realhats.pdf $(HERE)/realhats.dtx $(HERE)/realhats.ins $(MYTMP)/zip/$(THIS)
	cd $(MYTMP)/zip; zip -r $(OUTPUT)/realhats .
