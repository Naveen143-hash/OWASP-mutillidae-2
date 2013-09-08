<?php
require_once ('SQLQueryHandler.php');

class YouTubeVideo{
	public $mIdentificationToken = "";
	public $mTitle = "";
}// end class

class YouTubeVideos{

	private $mSQLQueryHandler = null;

	public function __construct($pPathToESAPI, $pSecurityLevel){
		/* ------------------------------------------
		 * initialize SQLQuery handler
		* ------------------------------------------ */
		$this->mSQLQueryHandler = new SQLQueryHandler($pPathToESAPI, $pSecurityLevel);
	
	}//end function
	
	public function getYouTubeVideo($pRecordIdentifier){
		$lQueryResult = $this->mSQLQueryHandler->getYouTubeVideo($pRecordIdentifier);
		$lNewYouTubeVideo = new YouTubeVideo();
		$lNewYouTubeVideo->mIdentificationToken = $lQueryResult->identificationToken;
		$lNewYouTubeVideo->mTitle = $lQueryResult->title;
		return $lNewYouTubeVideo;
	}//end function CreateYouTubeVideo()

}// end class YouTubeVideos

class YouTubeVideoHandler {

	const TWO_SECONDS = 2;
	
	/* private properties */
	private $mSecurityLevel = 0;
	private $mYouTubeVideos = null;
	private $mCurlIsInstalled = false;
	private $mYouTubeIsReachable = false;

	/* public properties */
	public static $InstallingOWASPMutillidaeIIonWindowswithXAMPP = 2;
	public static $InstallingMetasploitable2withMutillidaeonVirtualBox = 3;
	public static $HowtoinstalllatestMutillidaeonSamuraiWTF20 = 4;
	public static $IntroductiontoInstallingConfiguringandUsingBurpSuiteProxy = 5;
	public static $HowtoinstallandconfigureBurpSuitewithFirefox = 6;
	public static $HowtoremovePHPerrorsafterinstallingMutillidaeonWindowsXAMPP = 7;
	public static $BuildingaVirtualLabtoPracticePenTesting = 8;
	public static $HowtoUpgradetotheLatestMutillidaeonSamuraiWTF20 = 9;
	public static $SpideringWebApplicationswithBurpSuite = 10;
	public static $BasicsofBurpSuiteTargetsTab = 11;
	public static $BruteForcePageNamesusingBurpSuiteIntruder = 12;
	public static $UsingBurpIntruderSnipertoFuzzParameters = 13;
	public static $ComparingBurpSuiteIntruderModesSniperBatteringramPitchforkClusterbomb = 14;
	public static $IntroductiontoBurpSuiteComparerTool = 15;
	public static $UsingBurpSuiteSequencertoCompareCSRFtokenstrengths = 16;
	public static $BasicsofWebRequestandResponseInterceptionwithBurpSuite = 17;
	public static $ISSA2013WebPentestingWorkshopPart1IntrotoMutillidaeBurpSuiteInjection = 18;
	public static $OverviewofUsefulPenTestingAddonsforFirefox = 19;
	public static $BypassAuthenticationusingSQLInjection = 20;
	public static $AutomateSQLInjectionusingsqlmap = 21;
	public static $BasicsofSQLInjectionTimingAttacks = 22;
	public static $IntroductiontoUnionBasedSQLInjection = 23;
	public static $BasicsofInsertingDatawithSQLInjection = 24;
	public static $InjectWebShellBackdoorviaSQLInjection = 25;
	public static $BasicsofusingSQLInjectiontoReadFiles = 26;
	public static $GenerateCrossSiteScriptswithSQLInjection = 27;
	public static $SQLInjectionviaAJAXrequestwithJSONresponse = 28;
	public static $BasicsofusingsqlmapISSAKYWorkshopFebruary2013 = 29;
	public static $ExplanationofHTTPOnlyCookiesinPresenceCrossSiteScripting = 30;
	public static $TwoMethodstoStealSessionTokenusingCrossSiteScripting = 31;
	public static $InjectingaCrossSiteScriptviaCascadingStylesheetContext = 32;
	public static $BasicsofInjectingCrossSiteScriptintoHTMLonclickEvent = 33;
	public static $IntroductiontolocatingReflectedCrosssiteScripting = 34;
	public static $SendingPersistentCrosssiteScriptsintoWebLogstoSnagWebAdmin = 35;
	public static $InjectingCrossSiteScriptsXSSintoLogPageviaCookie = 37;
	public static $IntroductiontoHTMLInjectionHTMLiandCrossSiteScriptingXSSUsingMutillidae = 38;
	public static $IntroductiontoCrossSiteScriptingXSSviaJavaScriptStringInjection = 39;
	public static $AddingValuestoDOMStorageusingCrosssiteScripting = 41;
	public static $AlterValuesinHTML5WebStorageusingCrosssiteScript = 42;
	public static $AlterValuesinHTML5WebStorageusingPersistentCrosssiteScript = 43;
	public static $AlterValuesinHTML5WebStorageusingReflectedCrosssiteScript = 44;
	public static $WebPenTestingHTML5WebStorageusingJSONInjection = 45;
	public static $StealingHTML5StorageviaJSONInjection = 46;
	public static $ReadingHiddenValuesfromHTML5DomStorage = 47;
	public static $CommandInjectiontoDumpFilesStartServicesandDisableFirewall = 48;
	public static $HowtoLocatetheEastereggFileusingCommandInjection = 49;
	public static $GainingAdministrativeShellAccessviaCommandInjection = 50;
	public static $UsingCommandInjectiontoGainRemoteDesktop = 51;
	public static $IntroductiontoHTTPParameterPollution = 52;
	public static $UsingHydratoBruteForceWebFormsBasedAuthentication = 53;
	public static $BypassAuthenticationviaAuthenticationTokenManipulation = 55;
	public static $BruteForceAuthenticationusingBurpIntruder = 56;
	public static $AnalyzeSessionTokenRandomnessusingBurpSuiteSequencer = 57;
	public static $DetermineServerBannersusingNetcatNiktoandw3af = 58;
	public static $UsingNmaptoFingerprintHTTPserversandWebApplications = 59;
	public static $FindingCommentsandFileMetadatausingMultipleTechniques = 60;
	public static $HowtoExploitLocalFileInclusionVulnerabilityusingBurpSuite = 61;
	public static $ISSA2013WebPentestingWorkshopPart6LocalRemoteFileInclusion = 62;
	public static $TwoMethodstoBypassJavaScriptValidation = 63;
	public static $XSSbypassingJavaScriptValidation = 64;
	public static $HowtoBypassMaxlengthRestrictionsonHTMLInputFields = 65;
	public static $IntroductiontoCBCBitFlippingAttack = 66;
	public static $UsingEttercapandSSLstriptoCaptureCredentials = 67;
	public static $IntroductiontoXMLExternalEntityInjection = 68;
	public static $DetermineHTTPMethodsusingNetcat = 69;
	public static $ISSAIntroductiontoXMLExternalEntityInjection = 70;
	public static $IntroductiontoUseragentImpersonation = 71;
	
	/* private methods */
	private function doSetSecurityLevel($pSecurityLevel){
		$this->mSecurityLevel = $pSecurityLevel;
	
		switch ($this->mSecurityLevel){
			case "0": // This code is insecure, we are not encoding output
			case "1": // This code is insecure, we are not encoding output
				break;
	
			case "2":
			case "3":
			case "4":
			case "5": // This code is fairly secure
				break;
		}// end switch
	}// end function
		
	private function fetchVideoPropertiesFromYouTube($pVideoIdentificationToken){
		$lYouTubeResponse = "";
		try{
			if (function_exists("curl_init")) {
				$timeout = $this::TWO_SECONDS;
				$lCurlInstance = curl_init();
				curl_setopt($lCurlInstance, CURLOPT_URL, "http://gdata.youtube.com/feeds/api/videos/".$pVideoIdentificationToken);
				curl_setopt($lCurlInstance, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($lCurlInstance, CURLOPT_CONNECTTIMEOUT, $timeout);
				$lYouTubeResponse = curl_exec($lCurlInstance);
				curl_close($lCurlInstance);
			}//end if
		} catch (Exception $e) {
			//do nothing
		}//end try
		
		return $lYouTubeResponse;
	}// end function fetchVideoPropertiesFromYouTube
	
	private function getYouTubeIsNotReachableAdvice(){
		return '<br/><span style="background-color: #ffff99;">Warning: Could not reach YouTube via network connection. Failed to embed video.</span><br/>';
	}// end function getYouTubeIsNotReachableAdvice
	
	private function getNoCurlAdviceBasedOnOperatingSystem(){
		$lOperatingSystemAdvice = "";
		$lHTML = "";
		
		switch (PHP_OS){
			case "Linux":
				$lOperatingSystemAdvice = "The server operating system seems to be Linux. You may be able to install with sudo apt-get install php5-curl";
				break;
			case "WIN32":
			case "WINNT":
			case "Windows":
				$lOperatingSystemAdvice = "The server operating system seems to be Windows. You may be able to enable by uncommenting extension=php_curl.dll in the php.ini file and restarting apache server.";
				break;
			default: $lOperatingSystemAdvice = ""; break;
		}// end switch
		
		$lHTML = '<br/><span style="background-color: #ffff99;">Warning: Failed to embed video because PHP Curl is not installed on the server. '.$lOperatingSystemAdvice.'</span><br/>';
		return $lHTML;
	}// end function getNoCurlAdviceBasedOnOperatingSystem

	private function curlIsInstalled(){
		return function_exists("curl_init");
	}// end function curlIsInstalled
	
	private function generateYouTubeFrameHTML($pVideoIdentificationToken){
		$lRandomNumber = rand(1, 10000000);
		$lHTML = '
			<script>
				var lYouTubeFrameCode'.$lRandomNumber.' = \'<iframe width=640px height=480px src=https://www.youtube.com/embed/'.$pVideoIdentificationToken.'?autoplay=1 frameborder=0 allowfullscreen=1></iframe>\';
			</script>
			<span>
				<a
					href="#"
					id="btn-load-video'.$lRandomNumber.'"
					onclick="document.getElementById(\'the-player'.$lRandomNumber.'\').innerHTML=lYouTubeFrameCode'.$lRandomNumber.';"
				>
				Load the video</a>
			</span>
			<div id="the-player'.$lRandomNumber.'"></div>
		';
		return $lHTML;
	}// end function generateYouTubeFrameHTML()

	private function isYouTubeReachable(){
		/* Pick any video and see if we can fetch its properties.
		 * 'DJaX4HN2gwQ' is 'Introduction to XML External Entity Injection'
		* */
		$lYouTubeResponse = "";
		if ($this->curlIsInstalled()){
			$lYouTubeResponse = $this->fetchVideoPropertiesFromYouTube("DJaX4HN2gwQ");
		}// end if $mCurlIsInstalled
		return (strlen($lYouTubeResponse) > 0);
	}// end function isYouTubeReachable()
	
	/* constructor */
	public function __construct($pPathToESAPI, $pSecurityLevel){
		$this->doSetSecurityLevel($pSecurityLevel);
		$this->mYouTubeVideos = new YouTubeVideos($pPathToESAPI, $pSecurityLevel);
		$this->mCurlIsInstalled = $this->curlIsInstalled();
		$this->mYouTubeIsReachable = $this->isYouTubeReachable();
	}// end function __construct

	public function getYouTubeVideo($pVideo) {
		$lHTML = "";
		$lVideo = $this->mYouTubeVideos->getYouTubeVideo($pVideo);
		$lVideoIdentificationToken = $lVideo->mIdentificationToken;
		$lVideoTitle = $lVideo->mTitle;
		$lOperatingSystemAdvice = "";

		try {
			if (!$this->mCurlIsInstalled){
				$lHTML .= $this->getNoCurlAdviceBasedOnOperatingSystem();
			}//end if curl is not installed

			if (!$this->mYouTubeIsReachable){
				$lHTML .= $this->getYouTubeIsNotReachableAdvice();
			}//end if YouTube is not reachable

			$lHTML .= '<br/><span class="label">'.$lVideoTitle.': </span>';

			if($this->mYouTubeIsReachable){
				$lHTML .= $this->generateYouTubeFrameHTML($lVideoIdentificationToken);
			}else {
				$lHTML .= '<a href="https://www.youtube.com/watch?v='.$lVideoIdentificationToken.'" target="_blank">Visit YouTube Site</a>';
			}// end if

		} catch (Exception $e) {
			//do nothing
		}//end try

		return $lHTML;
		
	}// end function getYouTubeVideo
	
}// end class YouTubeVideoHandler