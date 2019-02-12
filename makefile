#  * Total Order Discount+.
#  *
#  * The Total Order Discount+ extension is for CMS Opencart 3.x.
#  * It allows to make a discount system based on sub-total price or amount of products in the cart.
#  *
#  * @author		Andrii Burkatskyi aka underr underr.ua@gmail.com
#  * @copyright	Copyright (c) 2018-2019 Andrii Burkatskyi
#  * @license		https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount-plus/master/EULA.txt End-User License Agreement
#  *
#  * @version		1.1
#  *
#  * @see			  https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35103
#  * @see			  https://underr.space/notes/projects/project-011.html
#  * @see			  https://github.com/underr-ua/ocmod3-total-order-discount-plus

zip=$(shell basename `pwd`).ocmod.zip

license=EULA.txt
readme=README.md
datetime=201801010000.00
src=src
bin=bin


all: checkg clean makedir timestamp makezip hideg

checkg:
	@if [ ! -f "hideg.pwd" ]; then hideg; fi

makedir:
	mkdir -p "$(bin)"

timestamp:
	find . -exec touch -a -m -t $(datetime) {} \;

makezip:
	cd "$(src)" && zip -9qrX "../$(bin)/$(zip)" * && cd .. && zip -9qrX "$(bin)/$(zip)" "$(readme)" "$(license)"

hideg: hideg.pwd
	hideg "$(bin)/$(zip)"

clean:
	@echo Cleaning...
	@rm -f "$(bin)"/*.*
	@rm -f "$(src)"/*.zip
	@rm -f "$(src)/$(license)"
	@rm -f "$(src)/$(readme)"
