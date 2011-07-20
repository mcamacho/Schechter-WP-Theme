<?php $inc_path = get_stylesheet_directory_uri() . '/inc/'; ?>
<script language="JavaScript" type="text/JavaScript">
<!--
// Make sure the browser supports the script
if (document.images)
{
	inc_path = '<?php echo $inc_path?>';
	// Setup eaach state
	function Area(filename,site)
	{
		// Set the site to open on click
		this.site = site;
		// Set the rollover image
		this.filename = inc_path + filename;
		// Set the image for this area
		this.pic = new Image; 
		// Preload the image for the user
		this.pic.src = this.filename; 
	}
	// Go to the website for this state
	Area.prototype.nav  = function() { self.location = this.site; }
	// Show the state the mouse is over
	Area.prototype.swp  = function() { document['MAP'].src = this.filename; }
	// Show the default state
	Area.prototype.rst  = function() { document['MAP'].src = Default.filename; }
}
// Setup the default map
var Default = new Area('images/default.gif','');

// Setup each states URL
var AK = new Area('images/ak.gif','?state_id=1');
var AL = new Area('images/al.gif','?state_id=2');
var AR = new Area('images/ar.gif','?state_id=5');
var AZ = new Area('images/az.gif','?state_id=4');
var CA = new Area('images/ca.gif','?state_id=6');
var CO = new Area('images/co.gif','?state_id=7');
var CT = new Area('images/ct.gif','?state_id=8');
var DC = new Area('images/dc.gif','?state_id=10');
var DE = new Area('images/de.gif','?state_id=9');
var DW = new Area('images/de.gif','?state_id=10');
var FL = new Area('images/fl.gif','?state_id=12');
var GA = new Area('images/ga.gif','?state_id=13');
var HI = new Area('images/hi.gif','?state_id=15');
var IA = new Area('images/ia.gif','?state_id=19');
var ID = new Area('images/id.gif','?state_id=16');
var IL = new Area('images/il.gif','?state_id=17');
var IN = new Area('images/in.gif','?state_id=18');
var KS = new Area('images/ks.gif','?state_id=20');
var KY = new Area('images/ky.gif','?state_id=21');
var LA = new Area('images/la.gif','?state_id=22');
var MA = new Area('images/ma.gif','?state_id=26');
var ME = new Area('images/me.gif','?state_id=23');
var MD = new Area('images/md.gif','?state_id=25');
var MI = new Area('images/mi.gif','?state_id=27');
var MN = new Area('images/mn.gif','?state_id=28');
var MO = new Area('images/mo.gif','?state_id=30');
var MS = new Area('images/ms.gif','?state_id=29');
var MT = new Area('images/mt.gif','?state_id=31');
var NC = new Area('images/nc.gif','?state_id=38');
var ND = new Area('images/nd.gif','?state_id=39');
var NE = new Area('images/ne.gif','?state_id=32');
var NH = new Area('images/nh.gif','?state_id=34');
var NJ = new Area('images/nj.gif','?state_id=35');
var NM = new Area('images/nm.gif','?state_id=36');
var NV = new Area('images/nv.gif','?state_id=33');
var NY = new Area('images/ny.gif','?state_id=37');
var OH = new Area('images/oh.gif','?state_id=41');
var OK = new Area('images/ok.gif','?state_id=42');
var OR = new Area('images/or.gif','?state_id=43');
var PA = new Area('images/pa.gif','?state_id=45');
var RI = new Area('images/ri.gif','?state_id=47');
var SC = new Area('images/sc.gif','?state_id=48');
var SD = new Area('images/sd.gif','?state_id=49');
var TN = new Area('images/tn.gif','?state_id=50');
var TX = new Area('images/tx.gif','?state_id=51');
var UT = new Area('images/ut.gif','?state_id=52');
var VA = new Area('images/va.gif','?state_id=55');
var VT = new Area('images/vt.gif','?state_id=53');
var WA = new Area('images/wa.gif','?state_id=56');
var WV = new Area('images/wv.gif','?state_id=57');
var WY = new Area('images/wy.gif','?state_id=59');
var WI = new Area('images/wi.gif','?state_id=58');
//-->
</script>

<img src="<?php echo $inc_path?>images/default.gif" name="MAP" border="0" usemap="#MAP">

<map name="MAP">

<area onMouseOver="AK.swp()" onMouseOut="AK.rst()" onclick="AK.nav()" shape="poly" coords="167,297,149,304,150,320,132,313,121,317,125,335,138,342,136,353,127,359,129,376,145,391,152,399,165,406,143,420,115,428,88,431,66,426,38,416,20,403,13,379,7,373,0,388,4,404,20,428,45,442,70,450,87,453,118,451,144,448,159,445,177,430,198,437,213,423,219,405,232,398,251,395,262,400,278,410,288,420,300,436,311,448,345,450,348,438,337,415,312,396,300,383,280,383,276,373,277,358,277,334,276,296,276,282,263,272,240,264,230,259,220,252,199,256,185,261,176,267,164,278">
<area onMouseOver="HI.swp()" onMouseOut="HI.rst()" onclick="HI.nav()" shape="poly" coords="356,367,348,348,343,336,335,327,318,327,326,342,338,359,342,371,340,381,342,393,353,401,368,397,373,389,373,373">
<area onMouseOver="AL.swp()" onMouseOut="AL.rst()" onclick="AL.nav()" shape="poly" coords="387,181,409,179,415,205,419,221,396,223,398,233,392,229,388,211">
<area onMouseOver="AZ.swp()" onMouseOut="AZ.rst()" onclick="AZ.nav()" shape="poly" coords="159,157,200,161,194,224,182,223,173,221,142,203,146,201,147,198,148,191,150,182,151,168,157,164">
<area onMouseOver="AR.swp()" onMouseOut="AR.rst()" onclick="AR.nav()" shape="poly" coords="328,172,363,169,369,171,370,173,361,193,359,201,360,205,335,205,332,200">
<area onMouseOver="CA.swp()" onMouseOut="CA.rst()" onclick="CA.nav()" shape="poly" coords="82,82,118,90,110,123,148,175,149,184,145,195,144,204,120,202,120,188,112,184,101,180,99,175,92,172,93,161,92,156,87,147,88,142,85,135,88,131,82,125,80,117,81,108,78,100,82,92">
<area onMouseOver="CO.swp()" onMouseOut="CO.rst()" onclick="CO.nav()" shape="poly" coords="205,116,261,120,260,163,199,159">
<area onMouseOver="CT.swp()" onMouseOut="CT.rst()" onclick="CT.nav()" shape="poly" coords="493,77,504,73,506,80,496,85">
<area onMouseOver="CT.swp()" onMouseOut="CT.rst()" onclick="CT.nav()" shape="rect" coords="511,88,527,99">
<area onMouseOver="DE.swp()" onMouseOut="DE.rst()" onclick="DE.nav()" shape="rect" coords="506,107,524,117">
<area onMouseOver="FL.swp()" onMouseOut="FL.rst()" onclick="FL.nav()" shape="poly" coords="397,224,428,222,435,220,455,218,469,237,475,249,481,259,480,272,474,279,460,269,448,258,443,249,443,239,433,233,432,233,421,239,413,231,401,232">
<area onMouseOver="GA.swp()" onMouseOut="GA.rst()" onclick="GA.nav()" shape="poly" coords="409,178,431,174,437,181,443,186,449,193,456,201,456,217,421,220">
<area onMouseOver="ID.swp()" onMouseOut="ID.rst()" onclick="ID.nav()" shape="poly" coords="157,21,163,21,161,33,165,41,168,50,168,56,168,61,172,63,176,73,193,76,189,102,141,94,146,74,146,68,153,59,150,50">
<area onMouseOver="IL.swp()" onMouseOut="IL.rst()" onclick="IL.nav()" shape="poly" coords="356,101,378,100,381,108,385,140,385,147,380,155,376,160,372,153,363,148,365,140,361,139,357,134,352,127,356,111,360,109">
<area onMouseOver="IN.swp()" onMouseOut="IN.rst()" onclick="IN.nav()" shape="poly" coords="382,109,389,105,402,103,407,132,403,137,399,144,387,147">
<area onMouseOver="IA.swp()" onMouseOut="IA.rst()" onclick="IA.nav()" shape="poly" coords="304,92,350,93,348,97,354,101,359,106,353,115,353,121,347,121,313,123,312,116,309,108,309,102">
<area onMouseOver="KS.swp()" onMouseOut="KS.rst()" onclick="KS.nav()" shape="poly" coords="262,130,315,129,322,135,324,142,328,163,261,163">
<area onMouseOver="KY.swp()" onMouseOut="KY.rst()" onclick="KY.nav()" shape="poly" coords="375,164,426,155,432,149,434,144,428,138,428,132,422,134,415,133,409,132,403,140,401,144,389,148,384,150">
<area onMouseOver="LA.swp()" onMouseOut="LA.rst()" onclick="LA.nav()" shape="poly" coords="339,245,341,234,342,229,336,222,336,206,359,206,362,215,359,227,373,228,385,238,379,244,394,250,374,248,368,247,360,249,357,244,350,248">
<area onMouseOver="ME.swp()" onMouseOut="ME.rst()" onclick="ME.nav()" shape="poly" coords="499,35,508,56,510,49,511,43,515,42,516,36,518,37,523,32,527,28,521,18,518,23,514,6,501,6">
<area onMouseOver="MD.swp()" onMouseOut="MD.rst()" onclick="MD.nav()" shape="rect" coords="498,118,520,129">
<area onMouseOver="MA.swp()" onMouseOut="MA.rst()" onclick="MA.nav()" shape="rect" coords="518,55,538,66">
<area onMouseOver="MA.swp()" onMouseOut="MA.rst()" onclick="MA.nav()" shape="poly" coords="492,67,511,61,517,68,510,70,493,75">
<area onMouseOver="MN.swp()" onMouseOut="MN.rst()" onclick="MN.nav()" shape="poly" coords="298,35,304,59,304,68,307,74,307,91,349,91,347,86,336,78,336,77,335,68,337,62,336,60,337,53,342,48,359,39,347,36,330,33,320,28,311,25">
<area onMouseOver="MS.swp()" onMouseOut="MS.rst()" onclick="MS.nav()" shape="poly" coords="367,185,386,182,390,231,380,232,373,225,361,226,363,213,362,208,362,204,361,196">
<area onMouseOver="MO.swp()" onMouseOut="MO.rst()" onclick="MO.nav()" shape="poly" coords="317,124,352,122,351,131,357,137,363,140,362,148,374,158,371,170,356,167,354,168,329,170,327,142">
<area onMouseOver="MT.swp()" onMouseOut="MT.rst()" onclick="MT.nav()" shape="poly" coords="163,22,194,27,221,30,249,33,246,76,194,70,190,75,186,72,179,72,175,66,170,62,170,53,168,48,163,39,161,33">
<area onMouseOver="NE.swp()" onMouseOut="NE.rst()" onclick="NE.nav()" shape="poly" coords="247,118,245,98,284,98,288,101,292,99,305,101,310,114,316,127,259,129,260,119">
<area onMouseOver="NV.swp()" onMouseOut="NV.rst()" onclick="NV.nav()" shape="poly" coords="119,90,164,99,157,160,152,165,149,174,112,123">
<area onMouseOver="NH.swp()" onMouseOut="NH.rst()" onclick="NH.nav()" shape="rect" coords="473,14,493,29">
<area onMouseOver="NH.swp()" onMouseOut="NH.rst()" onclick="NH.nav()" shape="poly" coords="497,35,508,61,495,64,496,55,496,49,498,43">
<area onMouseOver="NJ.swp()" onMouseOut="NJ.rst()" onclick="NJ.nav()" shape="rect" coords="497,95,512,107">
<area onMouseOver="NJ.swp()" onMouseOut="NJ.rst()" onclick="NJ.nav()" shape="poly" coords="484,86,492,87,491,95,494,98,493,105,492,110,484,106,486,100,485,93">
<area onMouseOver="NM.swp()" onMouseOut="NM.rst()" onclick="NM.nav()" shape="poly" coords="202,161,251,164,251,219,207,218,201,225,195,226">
<area onMouseOver="NY.swp()" onMouseOut="NY.rst()" onclick="NY.nav()" shape="poly" coords="453,70,462,71,465,67,460,62,466,53,470,47,480,42,486,58,495,85,484,85,482,81,444,90,443,85,444,76">
<area onMouseOver="NC.swp()" onMouseOut="NC.rst()" onclick="NC.nav()" shape="poly" coords="420,175,432,164,442,154,488,142,493,148,491,159,485,163,478,177,473,176,466,170,460,167,451,170,449,166">
<area onMouseOver="ND.swp()" onMouseOut="ND.rst()" onclick="ND.nav()" shape="poly" coords="251,31,296,33,304,66,248,66">
<area onMouseOver="OH.swp()" onMouseOut="OH.rst()" onclick="OH.nav()" shape="poly" coords="402,103,410,102,436,93,441,111,439,120,431,126,427,134,419,132,408,134">
<area onMouseOver="OK.swp()" onMouseOut="OK.rst()" onclick="OK.nav()" shape="poly" coords="253,165,326,165,329,199,323,195,316,199,305,198,293,195,280,190,278,169,253,170">
<area onMouseOver="OR.swp()" onMouseOut="OR.rst()" onclick="OR.nav()" shape="poly" coords="142,93,85,81,86,69,90,64,94,55,97,46,99,41,103,39,107,46,112,46,119,49,131,49,139,50,147,51,152,57,145,70">
<area onMouseOver="PA.swp()" onMouseOut="PA.rst()" onclick="PA.nav()" shape="poly" coords="442,117,437,92,444,89,448,91,480,82,483,87,484,102,480,107">
<area onMouseOver="SC.swp()" onMouseOut="SC.rst()" onclick="SC.nav()" shape="poly" coords="428,174,456,200,458,198,467,191,474,174,458,169,451,170,446,168">
<area onMouseOver="SD.swp()" onMouseOut="SD.rst()" onclick="SD.nav()" shape="poly" coords="248,67,303,67,304,75,307,80,305,88,304,94,305,99,300,99,248,97">
<area onMouseOver="TN.swp()" onMouseOut="TN.rst()" onclick="TN.nav()" shape="poly" coords="375,165,441,153,436,160,418,175,368,183">
<area onMouseOver="TX.swp()" onMouseOut="TX.rst()" onclick="TX.nav()" shape="poly" coords="214,221,252,221,252,171,277,170,278,189,286,195,301,200,315,200,325,197,333,202,335,216,339,223,340,234,337,250,324,260,313,266,308,275,310,291,288,286,282,276,276,267,269,254,264,250,256,248,252,257,238,252,231,237,220,229">
<area onMouseOver="UT.swp()" onMouseOut="UT.rst()" onclick="UT.nav()" shape="poly" coords="157,154,165,99,188,104,187,115,203,116,198,159">
<area onMouseOver="VT.swp()" onMouseOut="VT.rst()" onclick="VT.nav()" shape="rect" coords="457,30,473,45">
<area onMouseOver="VT.swp()" onMouseOut="VT.rst()" onclick="VT.nav()" shape="poly" coords="489,67,493,66,494,51,496,43,495,39,481,45">
<area onMouseOver="VA.swp()" onMouseOut="VA.rst()" onclick="VA.nav()" shape="poly" coords="428,155,444,153,488,140,484,132,480,124,474,122,474,117,463,116,454,129,450,141,436,146">
<area onMouseOver="WA.swp()" onMouseOut="WA.rst()" onclick="WA.nav()" shape="poly" coords="119,9,161,17,152,43,148,51,144,50,123,48,112,46,99,34,102,8">
<area onMouseOver="WV.swp()" onMouseOut="WV.rst()" onclick="WV.nav()" shape="poly" coords="429,133,437,120,444,116,450,117,460,118,446,143,438,144,431,139">
<area onMouseOver="WY.swp()" onMouseOut="WY.rst()" onclick="WY.nav()" shape="poly" coords="189,113,196,71,246,77,245,118,213,115">
<area onMouseOver="DC.swp()" onMouseOut="DC.rst()" onclick="DC.nav()" shape="rect" coords="494,130,513,143">
<area onMouseOver="DC.swp()" onMouseOut="DC.rst()" onclick="DC.nav()" shape="poly" coords="450,115,472,110,475,110,482,118,485,128,475,122,475,115,466,116,463,120">
<area onMouseOver="MI.swp()" onMouseOut="MI.rst()" onclick="MI.nav()" shape="poly" coords="388,104,414,100,418,94,421,87,420,81,418,76,410,72,410,67,408,61,402,57,406,54,400,49,393,46,386,47,378,51,369,47,374,42,368,41,358,49,353,53,356,57,367,57,372,59,376,64,383,60,387,59,391,58,391,61,391,66,386,68,385,72,384,78,384,84,388,92">
<area onMouseOver="WI.swp()" onMouseOut="WI.rst()" onclick="WI.nav()" shape="poly" coords="378,100,355,100,350,97,351,93,351,90,349,86,338,78,336,70,339,64,338,59,340,54,349,52,351,55,356,59,363,59,370,60,375,67,378,69,379,78">
<area onMouseOver="RI.swp()" onMouseOut="RI.rst()" onclick="RI.nav()" shape="poly" coords="506,73,507,77,516,80,523,85,534,85,534,73,522,75,520,68">
<area onMouseOver="DE.swp()" onMouseOut="DE.rst()" onclick="DE.nav()" shape="poly" coords="485,118,490,118,483,106,481,108">
<area onMouseOver="MD.swp()" onMouseOut="MD.rst()" onclick="MD.nav()" shape="poly" coords="488,131,491,120,486,119,481,112,477,112,482,116">

</map>