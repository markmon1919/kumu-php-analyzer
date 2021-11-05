#!/bin/sh

export TARGET_PATH="/project"

alias choose_anaylzer="select_anaylzer"
select_anaylzer() {
	echo -e "\n*** Choose Your Analyzer ***\n"
	echo -e "[1] - Parallel Lint"
	echo -e "[2] - PHPStan"
	echo -e "[3] - PHPCS"
	echo -e "[4] - Local PHP Security Checker"
	echo -e "[5] - PHPCPD"
	echo -e "[*] - Press any key to exit."
	echo -n "Select: "
	read phpbin
	echo -e ""
	case "$phpbin" in
		1) echo -e "Parallel Lint Analyzer Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phplint analyse ${TARGET_PATH};;
		2) echo -e "PHPStan Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpstan analyse ${TARGET_PATH};;
		3) echo -e "PHPCS Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpcs ${TARGET_PATH};;
		4) echo -e "Local PHP Security Checker Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			local-php-security-checker --path="${TARGET_PATH}";
			local-php-security-checker --path="${TARGET_PATH}/composer.lock";;
		5) echo -e "PHPCPD Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpcpd analyse ${TARGET_PATH};;
		*) echo -e "No Analyzer Selected."
			echo -e "Exiting..."
	esac
}

select_anaylzer



