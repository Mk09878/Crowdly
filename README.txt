***READ ME***
A brief description of what each of the files do:
1. Index.php: The main file of the system and the home page for the web app. 
2. RF_implementation.py: Thispython script takes data from 'A.csv', 'B.csv', 'C.csv' files and generates 3 machine learning models, which are stored into the 3 '*.joblib' files. 
3. predictor.py: communicates with the index.php, takes data from it and sends back processed output. Also utilizes one of the joblib files.
4.req.txt: The libraries required to be preinstalled on the host, that serve as a prerequisite for the system. use the following command to install all the libraries mentioned in the file:
			'pip install -r req.txt'
			Before installing the libraries, make sure 'Python 3.5' and 'Pip 10.0' is installed in the system.
			This command will give an error while installing the xgboost library. To install xgboost, use this commane
			'pip install xgboost-0.81-cp35-cp35m-win32.whl'
			Check for the python version while installing xgboost. the above command will work only if python 3.5 is installed on a windows 32 bit system. For any other system architecture and python version, download the appropriate .whl file from https://www.lfd.uci.edu/~gohlke/pythonlibs/#xgboost

If / Whenever training data is to be changed, make the necessary changes in the file names in RF_implementation.py file. Run the file from Command Prompt, using 'python RF_implementation.py'. This will generate 3 '*.joblib' files in the root directory of the software (i.e. Crowdly/)
Afrer this, make sure to change the required paths in the index.php at the lines 240. 1st path in the exec() function is the the path of the python.exe file in the system. 2nd path is the location of the predictor.py file. 

After changing these paths, the system can be accessed from any browser (prefereably Chrome v71 or up) 

[NOTE: This site was not tested on any other browser except Chrome v71. Using it on other browsers may give unexpected UI abnormalitites. It will not have any effect on the functioning of the website whatsoever.]

