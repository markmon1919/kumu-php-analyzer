#!/bin/sh

#Declare variables for default paths
TARGET_PATH="/project/app" 
LOG_PATH="/log"

# rm -rf /log/*.log$

phplint_func() {
	echo -n "\n>>> Running Parallel Lint"
	phplint analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phplint.log; #run phplint analyzer pointing to the project path and creates log file to log path
	PHPLINT_ERRORS=$(cat ${LOG_PATH}/phplint.log | grep errors | awk '{print$3}'); #declare total errors variable

	# echo -e "\nParallel Lint Errors: ${PHPLINT_ERRORS}"; #display total errors for phplint
}

phpstan_func() {
	echo -n "\n>>> Running PHPStan"
	phpstan analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpstan.log; #run phpstan analyzer pointing to the project path and creates log file to log path
	PHPSTAN_ERRORS=$(cat ${LOG_PATH}/phpstan.log | grep errors | awk '{print$3}'); #declare total errors variable


	# echo -e "PHPStan Errors: ${PHPSTAN_ERRORS}"; #display total errors for phpstan
}

phpcs_func() {
	echo -n "\n>>> Running PHPCS"
	phpcs ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcs.log; #run phpcs analyzer pointing to the project path and creates log file to log path
	PHPCS_ERRORS=$(cat ${LOG_PATH}/phpcs.log | grep FOUND | tail -n1 | awk '{print$2}'); #declare total errors variable

	# echo -e "PHPCS Errors: ${PHPCS_ERRORS}"; #display total errors for phpcs
}

local_func() {
	echo -n "\n>>> Running Local PHP Security Checker"
	local-php-security-checker --path="${TARGET_PATH}" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-1.log; #run local-php-security-checker analyzer pointing to the project path and creates log file to log path
	local-php-security-checker --path="/project/composer.lock" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-2.log; #run local-php-security-checker analyzer pointing to the project path composer lock file and creates log file to log path
	LPHPSC_ERRORS=$(cat ${LOG_PATH}/local-php-security-checker-1.log | sed -n 4p); #declare total errors variable

	# echo -e "Local PHP Security Checker Errors: ${LPHPSC_ERRORS}"; #display total errors for phpcpd
}

phpcpd_func() {
	echo -n "\n>>> Running PHPCPD"
	phpcpd analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcpd.log; #run phpcpd analyzer pointing to the project path and creates log file to log path
	PHPCPD_ERRORS=$(cat ${LOG_PATH}/phpcpd.log | grep Found | tr -d :); #declare total errors variable

	# echo -e "PHPCPD Errors: ${PHPCPD_ERRORS}";; #display total errors for phpcpd
}

summary_func() {
# 	Parallel Lint Errors: 3
# PHPStan Errors: 970
# PHPCS Errors: 831
# Local PHP Security Checker Errors: No packages have known vulnerabilities.
# PHPCPD Errors: Found 122 clones with 6298 duplicated lines in 149 files
	a=$(cat log/phplint.log | grep errors | awk '{print$3}')
	b=$(cat log/phpstan.log | grep errors | awk '{print$3}')
	c=$(cat log/phpcs.log | grep FOUND | tail -n1 | awk '{print$2}')
	d=$(cat log/phpcpd.log | grep Found | tr -d : | awk '{print$2}')

	sum=`expr $b + $c`
	echo "TOTAL ERRORS: $sum"
}

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
			phplint_func
			# phplint analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phplint.log; #run phplint analyzer pointing to the project path and creates log file to log path
			# PHPLINT_ERRORS=$(cat ${LOG_PATH}/phplint.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nParallel Lint Errors: ${PHPLINT_ERRORS}";; #display total errors for phplint
		2) echo -e "PHPStan Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpstan_func
			# phpstan analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpstan.log; #run phpstan analyzer pointing to the project path and creates log file to log path
			# PHPSTAN_ERRORS=$(cat ${LOG_PATH}/phpstan.log | grep errors | awk '{print$3}'); #declare total errors variable
			echo -e "\nPHPStan Errors: ${PHPSTAN_ERRORS}";; #display total errors for phpstan
		3) echo -e "PHPCS Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpcs_func
			# phpcs ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcs.log; #run phpcs analyzer pointing to the project path and creates log file to log path
			# PHPCS_ERRORS=$(cat ${LOG_PATH}/phpcs.log | grep FOUND | tail -n1 | awk '{print$2}'); #declare total errors variable
			echo -e "\nPHPCS Errors: ${PHPCS_ERRORS}";; #display total errors for phpcs
		4) echo -e "Local PHP Security Checker Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			local_func
			# local-php-security-checker --path="${TARGET_PATH}" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-1.log; #run local-php-security-checker analyzer pointing to the project path and creates log file to log path
			# local-php-security-checker --path="${TARGET_PATH}/composer.lock" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-2.log; #run local-php-security-checker analyzer pointing to the project path composer lock file and creates log file to log path
			LPHPSC_ERRORS=$(cat ${LOG_PATH}/local-php-security-checker-1.log | sed -n 4p); #declare total errors variable
			# LPHPSC_ERRORS_2=$(cat ${LOG_PATH}/local-php-security-checker-2.log | sed -n 4p); #declare total errors variable
			echo -e "\nLocal PHP Security Checker Errors: ${LPHPSC_ERRORS}";; #display total errors for phpcpd
		5) echo -e "PHPCPD Activated!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phpcpd_func
			# phpcpd analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcpd.log; #run phpcpd analyzer pointing to the project path and creates log file to log path
			# PHPCPD_ERRORS=$(cat ${LOG_PATH}/phpcpd.log | grep Found | tr -d :); #declare total errors variable
			echo -e "\nPHPCPD Errors: ${PHPCPD_ERRORS}";; #display total errors for phpcpd
		0) echo -e "Running All PHP Analyzers!";
			echo -e "Analyzing Target Path: ${TARGET_PATH}...";
			phplint_func
			phpstan_func
			phpcs_func
			# local_func
			phpcpd_func
			# echo -n "\n>>> Running Parallel Lint"
			# phplint analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phplint.log; #run phplint analyzer pointing to the project path and creates log file to log path
			# echo -n "\n>>> Running PHPStan"
			# phpstan analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpstan.log; #run phpstan analyzer pointing to the project path and creates log file to log path
			# echo -n "\n>>> Running PHPCS"
			# phpcs ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcs.log; #run phpcs analyzer pointing to the project path and creates log file to log path
			# echo -n "\n>>> Running Local PHP Security Checker"
			# local-php-security-checker --path="${TARGET_PATH}" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-1.log; #run local-php-security-checker analyzer pointing to the project path and creates log file to log path
			# local-php-security-checker --path="${TARGET_PATH}/composer.lock" 2>&1 | tee ${LOG_PATH}/local-php-security-checker-2.log; #run local-php-security-checker analyzer pointing to the project path composer lock file and creates log file to log path
			# echo -n "\n>>> Running PHPCPD"
			# phpcpd analyse ${TARGET_PATH} 2>&1 | tee ${LOG_PATH}/phpcpd.log; #run phpcpd analyzer pointing to the project path and creates log file to log path
			# PHPLINT_ERRORS=$(cat ${LOG_PATH}/phplint.log | grep errors | awk '{print$3}'); #declare total errors variable
			# PHPSTAN_ERRORS=$(cat ${LOG_PATH}/phpstan.log | grep errors | awk '{print$3}'); #declare total errors variable
			# PHPCS_ERRORS=$(cat ${LOG_PATH}/phpcs.log | grep FOUND | tail -n1 | awk '{print$2}'); #declare total errors variable
			# LPHPSC_ERRORS=$(cat ${LOG_PATH}/local-php-security-checker-1.log | sed -n 4p); #declare total errors variable
			# PHPCPD_ERRORS=$(cat ${LOG_PATH}/phpcpd.log | grep Found | tr -d :); #declare total errors variable
			echo -e "\nParallel Lint Errors: ${PHPLINT_ERRORS}"; #display total errors for phplint
			echo -e "PHPStan Errors: ${PHPSTAN_ERRORS}"; #display total errors for phpstan
			echo -e "PHPCS Errors: ${PHPCS_ERRORS}"; #display total errors for phpcs
			echo -e "Local PHP Security Checker Errors: ${LPHPSC_ERRORS}"; #display total errors for phpcpd
			echo -e "PHPCPD Errors: ${PHPCPD_ERRORS}"; #display total errors for phpcpd

			summary_func;;
		*) echo -e "No Analyzer Selected."
			echo -e "Exiting..."
	esac
}

select_anaylzer #execute select_anaylzer function



