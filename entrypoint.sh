#!/bin/sh

#Declare variables for default paths
TARGET_PATH="/project" 
LOG_PATH="/log"

#Create Case Statement for type of PHP Analyzer
select_anaylzer() {
	echo -e "\n*** Choose Your Analyzer ***\n"
	echo -e "[1] - Parallel Lint"
	echo -e "[2] - PHPStan"
	echo -e "[3] - PHPCS"
	echo -e "[4] - Local PHP Security Checker"
	echo -e "[5] - PHPCPD"
	echo -e "[0] - Run All PHP Analyzers"
	echo -e "[*] - Press any key to exit.\n"
	echo -n "Select: "
	read phpbin #read input variable
	echo -e ""
	case "$phpbin" in
		1) echo -e "Parallel Lint Analyzer Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phplint analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phplint.log; #run phplint analyzer pointing to the project path and creates log file to log path
			PHPLINT_ERRORS=$(cat ${LOG_PATH}/phplint.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nParallel Lint Errors: ${PHPLINT_ERRORS}";; #display total errors for phplint
		2) echo -e "PHPStan Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpstan analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpstan.log; #run phpstan analyzer pointing to the project path and creates log file to log path
			PHPSTAN_ERRORS=$(cat ${LOG_PATH}/phpstan.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nPHPStan Errors: ${PHPSTAN_ERRORS}";; #display total errors for phpstan
		3) echo -e "PHPCS Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpcs ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcs.log; #run phpcs analyzer pointing to the project path and creates log file to log path
			PHPCS_ERRORS=$(cat ${LOG_PATH}/phpcs.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nPHPCS Errors: ${PHPCS_ERRORS}";; #display total errors for phpcs
		4) echo -e "Local PHP Security Checker Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			local-php-security-checker --path="${TARGET_PATH}" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-1.log; #run local-php-security-checker analyzer pointing to the project path and creates log file to log path
			local-php-security-checker --path="${TARGET_PATH}/composer.lock" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-2.log; #run local-php-security-checker analyzer pointing to the project path composer lock file and creates log file to log path
			LPHPSC_ERRORS_1=$(cat ${LOG_PATH}/local-php-security-checker-1.log | grep errors | awk '{print$3}'); #declare total errors variable
			LPHPSC_ERRORS_2=$(cat ${LOG_PATH}/local-php-security-checker-2.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nLocal PHP Security Checker Errors: ${LPHPSC_ERRORS_1}";; #display total errors for phpcpd
		5) echo -e "PHPCPD Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpcpd analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcpd.log; #run phpcpd analyzer pointing to the project path and creates log file to log path
			PHPCPD_ERRORS=$(cat ${LOG_PATH}/phpcpd.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nPHPCPD Errors: ${PHPCPD_ERRORS}";; #display total errors for phpcpd
		0) echo -e "Running All PHP Analyzers!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			echo -n "\n>>> Running Parallel Lint"
			phplint analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phplint.log; #run phplint analyzer pointing to the project path and creates log file to log path
			echo -n "\n>>> Running PHPStan"
			phpstan analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpstan.log; #run phpstan analyzer pointing to the project path and creates log file to log path
			echo -n "\n>>> Running PHPCS"
			phpcs ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcs.log; #run phpcs analyzer pointing to the project path and creates log file to log path
			echo -n "\n>>> Running Local PHP Security Checker"
			local-php-security-checker --path="${TARGET_PATH}" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-1.log; #run local-php-security-checker analyzer pointing to the project path and creates log file to log path
			local-php-security-checker --path="${TARGET_PATH}/composer.lock" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-2.log; #run local-php-security-checker analyzer pointing to the project path composer lock file and creates log file to log path
			echo -n "\n>>> Running PHPCPD"
			phpcpd analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcpd.log; #run phpcpd analyzer pointing to the project path and creates log file to log path
			PHPLINT_ERRORS=$(cat ${LOG_PATH}/phplint.log | grep errors | awk '{print$3}'); #declare total errors variable
			PHPSTAN_ERRORS=$(cat ${LOG_PATH}/phpstan.log | grep errors | awk '{print$3}'); #declare total errors variable
			PHPCS_ERRORS=$(cat ${LOG_PATH}/phpcs.log | grep errors | awk '{print$3}'); #declare total errors variable
			LPHPSC_ERRORS_1=$(cat ${LOG_PATH}/local-php-security-checker-1.log | grep errors | awk '{print$3}'); #declare total errors variable
			LPHPSC_ERRORS_2=$(cat ${LOG_PATH}/local-php-security-checker-2.log | grep errors | awk '{print$3}'); #declare total errors variable
			PHPCPD_ERRORS=$(cat ${LOG_PATH}/phpcpd.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nParallel Lint Errors: ${PHPLINT_ERRORS}"; #display total errors for phplint
			echo -e "PHPStan Errors: ${PHPSTAN_ERRORS}"; #display total errors for phpstan
			echo -e "PHPCS Errors: ${PHPCS_ERRORS}"; #display total errors for phpcs
			echo -e "Local PHP Security Checker Errors: ${LPHPSC_ERRORS_1}"; #display total errors for phpcpd
			echo -e "PHPCPD Errors: ${PHPCPD_ERRORS}";; #display total errors for phpcpd
		*) echo -e "No Analyzer Selected."
			echo -e "Exiting..."
	esac
}

select_anaylzer #execute select_anaylzer function



