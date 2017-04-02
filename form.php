
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CSS-Tricks Checkout</title>

	<script src="/v/0.6.0/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		/* <![CDATA[ */
fc_json = {
	"products":[
		{
			"id": "76766464",
			"name": "Multi Product Order",
			"code": "",
			"options": {},
			"quantity": 1,
			"price_each": 0,
			"price": 0,
			"weight_each": 0.000,
			"weight": 0,
			"shipto": "",
			"category": "DEFAULT",
			"sub_startdate": "0000-00-00",
			"sub_frequency": ""
		}
	],
	"product_count": 1,
	"total_price": 0,
	"total_weight": 0,
	"session_id": "m1b5h4qff2o7qvcp1jbmsp3d74",
	"custom_fields":{
	},
	"messages":{
		"errors":[],
		"warnings":[],
		"info":[]
	}
};
		/* ]]> */
	</script>
<!-- ###########################################################################
BEGIN checkout
########################################################################### -->
<style type="text/css">
/* <![CDATA[ */
.ac_results {
	padding: 0px;
	border: 1px solid WindowFrame;
	background-color: Window;
	overflow: hidden;
	z-index: 100000000;
}
.ac_results ul {
	width: 100%;
	list-style-position: outside;
	list-style: none;
	padding: 0;
	margin: 0;
	text-align:left;
}
.ac_results iframe {
	display:none;/*sorry for IE5*/
	display/**/:block;/*sorry for IE5*/
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
	filter:mask();
	width:3000px;
	height:3000px;
}
.ac_results li {
	margin: 0px;
	padding: 2px 5px;
	cursor: pointer;
	display: block;
	width: 100%;
	font: menu;
	font-size: 12px;
	overflow: hidden;
}
.ac_over {
	background-color: Highlight;
	color: HighlightText;
}

/* ---------->>> jtip <<<--------------*/
#JT_arrow_left{
	background-image: url(/v/0.6.0/images/arrow_left.gif);
	background-repeat: no-repeat;
	background-position: left top;
	position: absolute;
	z-index:1000000001;
	left:-12px;
	height:23px;
	width:10px;
	top:-3px;
}
#JT_arrow_right{
	background-image: url(/v/0.6.0/images/arrow_right.gif);
	background-repeat: no-repeat;
	background-position: left top;
	position: absolute;
	z-index:1000000001;
	height:23px;
	width:11px;
	top:-2px;
	margin-left:3px;
}
#JT {
	position:absolute;
	z-index:1000000000;
	border:3px solid #ccc;
	background-color:#fff;
	overflow:hidden;
}
#JT_copy{
	padding:10px;
	color:#333;
}
.JT_loader{
	background:url(/v/0.6.0/images/loader.gif) no-repeat center center;
	width:100%;
	height:12px;
}
#JT_close_left{
	background-color:#ddd;
	text-align:left;
	padding-left:8px;
	padding-bottom:5px;
	padding-top:2px;
	color:#333;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
}
#JT_close_right{
	background-color:#ddd;
	text-align:left;
	padding-left:8px;
	padding-bottom:5px;
	padding-top:2px;
	color:#333;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
}
.jTip{
	cursor:help;
}
#JT iframe{
	display:none;
	display/**/:block;
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
	filter:mask();
	height:3000px;
}
/* ]]> */
</style>
<script src="/v/0.6.0/checkout.js?v=060.008" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
/* <![CDATA[ */

		// ** FORMATTER ** //
		FC.formatter.config.currency_symbol = "$";
		FC.formatter.config.frac_digits = 2;
		FC.formatter.config.mon_thousands_sep = ",";
		FC.formatter.config.mon_decimal_point = ".";
		// ** LOCATIONS ** //
		FC.locations.config.locations = [{"cn":"Afghanistan","cc3":"AFG","cc2":"AF","r":[{"n":"","c":""}]},{"cn":"Åland Islands","cc3":"ALA","cc2":"AX","r":[{"n":"","c":""}]},{"cn":"Albania","cc3":"ALB","cc2":"AL","r":[{"n":"","c":""}]},{"cn":"Algeria","cc3":"DZA","cc2":"DZ","r":[{"n":"","c":""}]},{"cn":"American Samoa","cc3":"ASM","cc2":"AS","r":[{"n":"","c":""}]},{"cn":"Andorra","cc3":"AND","cc2":"AD","r":[{"n":"","c":""}]},{"cn":"Angola","cc3":"AGO","cc2":"AO","r":[{"n":"","c":""}]},{"cn":"Anguilla","cc3":"AIA","cc2":"AI","r":[{"n":"","c":""}]},{"cn":"Antarctica","cc3":"ATA","cc2":"AQ","r":[{"n":"","c":""}]},{"cn":"Antigua and Barbuda","cc3":"ATG","cc2":"AG","r":[{"n":"","c":""}]},{"cn":"Argentina","cc3":"ARG","cc2":"AR","r":[{"n":"","c":""}]},{"cn":"Armenia","cc3":"ARM","cc2":"AM","r":[{"n":"","c":""}]},{"cn":"Aruba","cc3":"ABW","cc2":"AW","r":[{"n":"","c":""}]},{"cn":"Australia","cc3":"AUS","cc2":"AU","r":[{"n":"Australian Capital Territory","c":"ACT"},{"n":"New South Wales","c":"NSW"},{"n":"Northern Territory","c":"NT"},{"n":"Queensland","c":"QLD"},{"n":"South Australia","c":"SA"},{"n":"Tasmania","c":"TAS"},{"n":"Victoria","c":"VIC"},{"n":"Western Australia","c":"WA"}]},{"cn":"Austria","cc3":"AUT","cc2":"AT","r":[{"n":"Burgenland","c":"BL"},{"n":"Kaernten","c":"KN"},{"n":"Niederoesterreich","c":"NO"},{"n":"Oberoesterreich","c":"OO"},{"n":"Salzburg","c":"SB"},{"n":"Steiermark","c":"ST"},{"n":"Tirol","c":"TI"},{"n":"Voralberg","c":"VB"},{"n":"Wien","c":"WI"}]},{"cn":"Azerbaijan","cc3":"AZE","cc2":"AZ","r":[{"n":"","c":""}]},{"cn":"Bahamas","cc3":"BHS","cc2":"BS","r":[{"n":"","c":""}]},{"cn":"Bahrain","cc3":"BHR","cc2":"BH","r":[{"n":"","c":""}]},{"cn":"Bangladesh","cc3":"BGD","cc2":"BD","r":[{"n":"","c":""}]},{"cn":"Barbados","cc3":"BRB","cc2":"BB","r":[{"n":"","c":""}]},{"cn":"Belarus","cc3":"BLR","cc2":"BY","r":[{"n":"","c":""}]},{"cn":"Belgium","cc3":"BEL","cc2":"BE","r":[{"n":"","c":""}]},{"cn":"Belize","cc3":"BLZ","cc2":"BZ","r":[{"n":"","c":""}]},{"cn":"Benin","cc3":"BEN","cc2":"BJ","r":[{"n":"","c":""}]},{"cn":"Bermuda","cc3":"BMU","cc2":"BM","r":[{"n":"","c":""}]},{"cn":"Bhutan","cc3":"BTN","cc2":"BT","r":[{"n":"","c":""}]},{"cn":"Bolivia","cc3":"BOL","cc2":"BO","r":[{"n":"","c":""}]},{"cn":"Bosnia and Herzegovina","cc3":"BIH","cc2":"BA","r":[{"n":"","c":""}]},{"cn":"Botswana","cc3":"BWA","cc2":"BW","r":[{"n":"","c":""}]},{"cn":"Bouvet Island","cc3":"BVT","cc2":"BV","r":[{"n":"","c":""}]},{"cn":"Brazil","cc3":"BRA","cc2":"BR","r":[{"n":"","c":""}]},{"cn":"British Indian Ocean Territory","cc3":"IOT","cc2":"IO","r":[{"n":"","c":""}]},{"cn":"Brunei Darussalam","cc3":"BRN","cc2":"BN","r":[{"n":"","c":""}]},{"cn":"Bulgaria","cc3":"BGR","cc2":"BG","r":[{"n":"","c":""}]},{"cn":"Burkina Faso","cc3":"BFA","cc2":"BF","r":[{"n":"","c":""}]},{"cn":"Burundi","cc3":"BDI","cc2":"BI","r":[{"n":"","c":""}]},{"cn":"Cambodia","cc3":"KHM","cc2":"KH","r":[{"n":"","c":""}]},{"cn":"Cameroon","cc3":"CMR","cc2":"CM","r":[{"n":"","c":""}]},{"cn":"Canada","cc3":"CAN","cc2":"CA","r":[{"n":"Alberta","c":"AB"},{"n":"British Columbia","c":"BC"},{"n":"Manitoba","c":"MB"},{"n":"New Brunswick","c":"NB"},{"n":"Newfoundland","c":"NF"},{"n":"Newfoundland and Labrador","c":"NL"},{"n":"Northwest Territories","c":"NT"},{"n":"Nova Scotia","c":"NS"},{"n":"Nunavut","c":"NU"},{"n":"Ontario","c":"ON"},{"n":"Prince Edward Island","c":"PE"},{"n":"Quebec","c":"QC"},{"n":"Saskatchewan","c":"SK"},{"n":"Yukon Territory","c":"YT"}]},{"cn":"Cape Verde","cc3":"CPV","cc2":"CV","r":[{"n":"","c":""}]},{"cn":"Cayman Islands","cc3":"CYM","cc2":"KY","r":[{"n":"","c":""}]},{"cn":"Central African Republic","cc3":"CAF","cc2":"CF","r":[{"n":"","c":""}]},{"cn":"Chad","cc3":"TCD","cc2":"TD","r":[{"n":"","c":""}]},{"cn":"Chile","cc3":"CHL","cc2":"CL","r":[{"n":"","c":""}]},{"cn":"China","cc3":"CHN","cc2":"CN","r":[{"n":"","c":""}]},{"cn":"Christmas Island","cc3":"CXR","cc2":"CX","r":[{"n":"","c":""}]},{"cn":"Cocos (Keeling) Islands","cc3":"CCK","cc2":"CC","r":[{"n":"","c":""}]},{"cn":"Colombia","cc3":"COL","cc2":"CO","r":[{"n":"","c":""}]},{"cn":"Comoros","cc3":"COM","cc2":"KM","r":[{"n":"","c":""}]},{"cn":"Congo","cc3":"COG","cc2":"CG","r":[{"n":"","c":""}]},{"cn":"Congo, the Democratic Republic of the","cc3":"COD","cc2":"CD","r":[{"n":"","c":""}]},{"cn":"Cook Islands","cc3":"COK","cc2":"CK","r":[{"n":"","c":""}]},{"cn":"Costa Rica","cc3":"CRI","cc2":"CR","r":[{"n":"","c":""}]},{"cn":"Cote DIvoire","cc3":"CIV","cc2":"CI","r":[{"n":"","c":""}]},{"cn":"Croatia","cc3":"HRV","cc2":"HR","r":[{"n":"","c":""}]},{"cn":"Cuba","cc3":"CUB","cc2":"CU","r":[{"n":"","c":""}]},{"cn":"Cyprus","cc3":"CYP","cc2":"CY","r":[{"n":"","c":""}]},{"cn":"Czech Republic","cc3":"CZE","cc2":"CZ","r":[{"n":"","c":""}]},{"cn":"Denmark","cc3":"DNK","cc2":"DK","r":[{"n":"","c":""}]},{"cn":"Djibouti","cc3":"DJI","cc2":"DJ","r":[{"n":"","c":""}]},{"cn":"Dominica","cc3":"DMA","cc2":"DM","r":[{"n":"","c":""}]},{"cn":"Dominican Republic","cc3":"DOM","cc2":"DO","r":[{"n":"","c":""}]},{"cn":"East Timor","cc3":"TMP","cc2":"TP","r":[{"n":"","c":""}]},{"cn":"Ecuador","cc3":"ECU","cc2":"EC","r":[{"n":"","c":""}]},{"cn":"Egypt","cc3":"EGY","cc2":"EG","r":[{"n":"","c":""}]},{"cn":"El Salvador","cc3":"SLV","cc2":"SV","r":[{"n":"","c":""}]},{"cn":"Equatorial Guinea","cc3":"GNQ","cc2":"GQ","r":[{"n":"","c":""}]},{"cn":"Eritrea","cc3":"ERI","cc2":"ER","r":[{"n":"","c":""}]},{"cn":"Estonia","cc3":"EST","cc2":"EE","r":[{"n":"","c":""}]},{"cn":"Ethiopia","cc3":"ETH","cc2":"ET","r":[{"n":"","c":""}]},{"cn":"Falkland Islands (Malvinas)","cc3":"FLK","cc2":"FK","r":[{"n":"","c":""}]},{"cn":"Faroe Islands","cc3":"FRO","cc2":"FO","r":[{"n":"","c":""}]},{"cn":"Fiji","cc3":"FJI","cc2":"FJ","r":[{"n":"","c":""}]},{"cn":"Finland","cc3":"FIN","cc2":"FI","r":[{"n":"","c":""}]},{"cn":"France","cc3":"FRA","cc2":"FR","r":[{"n":"","c":""}]},{"cn":"France, Metropolitan","cc3":"FXX","cc2":"FX","r":[{"n":"","c":""}]},{"cn":"French Guiana","cc3":"GUF","cc2":"GF","r":[{"n":"","c":""}]},{"cn":"French Polynesia","cc3":"PYF","cc2":"PF","r":[{"n":"","c":""}]},{"cn":"French Southern Territories","cc3":"ATF","cc2":"TF","r":[{"n":"","c":""}]},{"cn":"Gabon","cc3":"GAB","cc2":"GA","r":[{"n":"","c":""}]},{"cn":"Gambia","cc3":"GMB","cc2":"GM","r":[{"n":"","c":""}]},{"cn":"Georgia","cc3":"GEO","cc2":"GE","r":[{"n":"","c":""}]},{"cn":"Germany","cc3":"DEU","cc2":"DE","r":[{"n":"Baden-Wuerttemberg","c":"BW"},{"n":"Bayern","c":"BY"},{"n":"Berlin","c":"BE"},{"n":"Brandenburg","c":"BB"},{"n":"Bremen","c":"HB"},{"n":"Hamburg","c":"HH"},{"n":"Hessen","c":"HE"},{"n":"Mecklenburg-Vorpommern","c":"MV"},{"n":"Niedersachsen","c":"NI"},{"n":"Nordrhein-Westfalen","c":"NW"},{"n":"Rheinland-Pfalz","c":"RP"},{"n":"Saarland","c":"SL"},{"n":"Sachsen","c":"SN"},{"n":"Sachsen-Anhalt","c":"ST"},{"n":"Schleswig-Holstein","c":"SH"},{"n":"Thueringen","c":"TH"}]},{"cn":"Ghana","cc3":"GHA","cc2":"GH","r":[{"n":"","c":""}]},{"cn":"Gibraltar","cc3":"GIB","cc2":"GI","r":[{"n":"","c":""}]},{"cn":"Greece","cc3":"GRC","cc2":"GR","r":[{"n":"","c":""}]},{"cn":"Greenland","cc3":"GRL","cc2":"GL","r":[{"n":"","c":""}]},{"cn":"Grenada","cc3":"GRD","cc2":"GD","r":[{"n":"","c":""}]},{"cn":"Guadeloupe","cc3":"GLP","cc2":"GP","r":[{"n":"","c":""}]},{"cn":"Guam","cc3":"GUM","cc2":"GU","r":[{"n":"","c":""}]},{"cn":"Guatemala","cc3":"GTM","cc2":"GT","r":[{"n":"","c":""}]},{"cn":"Guernsey","cc3":"GGY","cc2":"GG","r":[{"n":"","c":""}]},{"cn":"Guinea","cc3":"GIN","cc2":"GN","r":[{"n":"","c":""}]},{"cn":"Guinea-bissau","cc3":"GNB","cc2":"GW","r":[{"n":"","c":""}]},{"cn":"Guyana","cc3":"GUY","cc2":"GY","r":[{"n":"","c":""}]},{"cn":"Haiti","cc3":"HTI","cc2":"HT","r":[{"n":"","c":""}]},{"cn":"Heard Island and McDonald Island","cc3":"HMD","cc2":"HM","r":[{"n":"","c":""}]},{"cn":"Holy See (Vatican City State)","cc3":"VAT","cc2":"VA","r":[{"n":"","c":""}]},{"cn":"Honduras","cc3":"HND","cc2":"HN","r":[{"n":"","c":""}]},{"cn":"Hong Kong","cc3":"HKG","cc2":"HK","r":[{"n":"","c":""}]},{"cn":"Hungary","cc3":"HUN","cc2":"HU","r":[{"n":"","c":""}]},{"cn":"Iceland","cc3":"ISL","cc2":"IS","r":[{"n":"","c":""}]},{"cn":"India","cc3":"IND","cc2":"IN","r":[{"n":"","c":""}]},{"cn":"Indonesia","cc3":"IDN","cc2":"ID","r":[{"n":"","c":""}]},{"cn":"Iran, Islamic Republic of","cc3":"IRN","cc2":"IR","r":[{"n":"","c":""}]},{"cn":"Iraq","cc3":"IRQ","cc2":"IQ","r":[{"n":"","c":""}]},{"cn":"Ireland","cc3":"IRL","cc2":"IE","r":[{"n":"","c":""}]},{"cn":"Isle of Man","cc3":"IMN","cc2":"IM","r":[{"n":"","c":""}]},{"cn":"Israel","cc3":"ISR","cc2":"IL","r":[{"n":"","c":""}]},{"cn":"Italy","cc3":"ITA","cc2":"IT","r":[{"n":"","c":""}]},{"cn":"Jamaica","cc3":"JAM","cc2":"JM","r":[{"n":"","c":""}]},{"cn":"Japan","cc3":"JPN","cc2":"JP","r":[{"n":"","c":""}]},{"cn":"Jersey","cc3":"JEY","cc2":"JE","r":[{"n":"","c":""}]},{"cn":"Jordan","cc3":"JOR","cc2":"JO","r":[{"n":"","c":""}]},{"cn":"Kazakhstan","cc3":"KAZ","cc2":"KZ","r":[{"n":"","c":""}]},{"cn":"Kenya","cc3":"KEN","cc2":"KE","r":[{"n":"","c":""}]},{"cn":"Kiribati","cc3":"KIR","cc2":"KI","r":[{"n":"","c":""}]},{"cn":"Korea, Democratic People's Republic of","cc3":"PRK","cc2":"KP","r":[{"n":"","c":""}]},{"cn":"Korea, Republic of","cc3":"KOR","cc2":"KR","r":[{"n":"","c":""}]},{"cn":"Kuwait","cc3":"KWT","cc2":"KW","r":[{"n":"","c":""}]},{"cn":"Kyrgyzstan","cc3":"KGZ","cc2":"KG","r":[{"n":"","c":""}]},{"cn":"Lao People's Democratic Republic","cc3":"LAO","cc2":"LA","r":[{"n":"","c":""}]},{"cn":"Latvia","cc3":"LVA","cc2":"LV","r":[{"n":"","c":""}]},{"cn":"Lebanon","cc3":"LBN","cc2":"LB","r":[{"n":"","c":""}]},{"cn":"Lesotho","cc3":"LSO","cc2":"LS","r":[{"n":"","c":""}]},{"cn":"Liberia","cc3":"LBR","cc2":"LR","r":[{"n":"","c":""}]},{"cn":"Libya","cc3":"LBY","cc2":"LY","r":[{"n":"","c":""}]},{"cn":"Liechtenstein","cc3":"LIE","cc2":"LI","r":[{"n":"","c":""}]},{"cn":"Lithuania","cc3":"LTU","cc2":"LT","r":[{"n":"","c":""}]},{"cn":"Luxembourg","cc3":"LUX","cc2":"LU","r":[{"n":"","c":""}]},{"cn":"Macau Special Administrative Region of China","cc3":"MAC","cc2":"MO","r":[{"n":"","c":""}]},{"cn":"Macedonia, The Former Yugoslav Republic of","cc3":"MKD","cc2":"MK","r":[{"n":"","c":""}]},{"cn":"Madagascar","cc3":"MDG","cc2":"MG","r":[{"n":"","c":""}]},{"cn":"Malawi","cc3":"MWI","cc2":"MW","r":[{"n":"","c":""}]},{"cn":"Malaysia","cc3":"MYS","cc2":"MY","r":[{"n":"","c":""}]},{"cn":"Maldives","cc3":"MDV","cc2":"MV","r":[{"n":"","c":""}]},{"cn":"Mali","cc3":"MLI","cc2":"ML","r":[{"n":"","c":""}]},{"cn":"Malta","cc3":"MLT","cc2":"MT","r":[{"n":"","c":""}]},{"cn":"Marshall Islands","cc3":"MHL","cc2":"MH","r":[{"n":"","c":""}]},{"cn":"Martinique","cc3":"MTQ","cc2":"MQ","r":[{"n":"","c":""}]},{"cn":"Mauritania","cc3":"MRT","cc2":"MR","r":[{"n":"","c":""}]},{"cn":"Mauritius","cc3":"MUS","cc2":"MU","r":[{"n":"","c":""}]},{"cn":"Mayotte","cc3":"MYT","cc2":"YT","r":[{"n":"","c":""}]},{"cn":"Mexico","cc3":"MEX","cc2":"MX","r":[{"n":"","c":""}]},{"cn":"Micronesia, Federated States of","cc3":"FSM","cc2":"FM","r":[{"n":"","c":""}]},{"cn":"Moldova, Republic of","cc3":"MDA","cc2":"MD","r":[{"n":"","c":""}]},{"cn":"Monaco","cc3":"MCO","cc2":"MC","r":[{"n":"","c":""}]},{"cn":"Mongolia","cc3":"MNG","cc2":"MN","r":[{"n":"","c":""}]},{"cn":"Montenegro","cc3":"MNE","cc2":"ME","r":[{"n":"","c":""}]},{"cn":"Montserrat","cc3":"MSR","cc2":"MS","r":[{"n":"","c":""}]},{"cn":"Morocco","cc3":"MAR","cc2":"MA","r":[{"n":"","c":""}]},{"cn":"Mozambique","cc3":"MOZ","cc2":"MZ","r":[{"n":"","c":""}]},{"cn":"Myanmar","cc3":"MMR","cc2":"MM","r":[{"n":"","c":""}]},{"cn":"Namibia","cc3":"NAM","cc2":"NA","r":[{"n":"","c":""}]},{"cn":"Nauru","cc3":"NRU","cc2":"NR","r":[{"n":"","c":""}]},{"cn":"Nepal","cc3":"NPL","cc2":"NP","r":[{"n":"","c":""}]},{"cn":"Netherlands","cc3":"NLD","cc2":"NL","r":[{"n":"","c":""}]},{"cn":"Netherlands Antilles","cc3":"ANT","cc2":"AN","r":[{"n":"","c":""}]},{"cn":"New Caledonia","cc3":"NCL","cc2":"NC","r":[{"n":"","c":""}]},{"cn":"New Zealand","cc3":"NZL","cc2":"NZ","r":[{"n":"","c":""}]},{"cn":"Nicaragua","cc3":"NIC","cc2":"NI","r":[{"n":"","c":""}]},{"cn":"Niger","cc3":"NER","cc2":"NE","r":[{"n":"","c":""}]},{"cn":"Nigeria","cc3":"NGA","cc2":"NG","r":[{"n":"","c":""}]},{"cn":"Niue","cc3":"NIU","cc2":"NU","r":[{"n":"","c":""}]},{"cn":"Norfolk Island","cc3":"NFK","cc2":"NF","r":[{"n":"","c":""}]},{"cn":"Northern Mariana Islands","cc3":"MNP","cc2":"MP","r":[{"n":"","c":""}]},{"cn":"Norway","cc3":"NOR","cc2":"NO","r":[{"n":"","c":""}]},{"cn":"Oman","cc3":"OMN","cc2":"OM","r":[{"n":"","c":""}]},{"cn":"Pakistan","cc3":"PAK","cc2":"PK","r":[{"n":"","c":""}]},{"cn":"Palau","cc3":"PLW","cc2":"PW","r":[{"n":"","c":""}]},{"cn":"Palestinian Territory, Occupied","cc3":"PSE","cc2":"PS","r":[{"n":"","c":""}]},{"cn":"Panama","cc3":"PAN","cc2":"PA","r":[{"n":"","c":""}]},{"cn":"Papua New Guinea","cc3":"PNG","cc2":"PG","r":[{"n":"","c":""}]},{"cn":"Paraguay","cc3":"PRY","cc2":"PY","r":[{"n":"","c":""}]},{"cn":"Peru","cc3":"PER","cc2":"PE","r":[{"n":"","c":""}]},{"cn":"Philippines","cc3":"PHL","cc2":"PH","r":[{"n":"","c":""}]},{"cn":"Pitcairn","cc3":"PCN","cc2":"PN","r":[{"n":"","c":""}]},{"cn":"Poland","cc3":"POL","cc2":"PL","r":[{"n":"","c":""}]},{"cn":"Portugal","cc3":"PRT","cc2":"PT","r":[{"n":"","c":""}]},{"cn":"Puerto Rico","cc3":"PRI","cc2":"PR","r":[{"n":"","c":""}]},{"cn":"Qatar","cc3":"QAT","cc2":"QA","r":[{"n":"","c":""}]},{"cn":"Réunion","cc3":"REU","cc2":"RE","r":[{"n":"","c":""}]},{"cn":"Romania","cc3":"ROM","cc2":"RO","r":[{"n":"","c":""}]},{"cn":"Russian Federation","cc3":"RUS","cc2":"RU","r":[{"n":"","c":""}]},{"cn":"Rwanda","cc3":"RWA","cc2":"RW","r":[{"n":"","c":""}]},{"cn":"Saint Barthélemy","cc3":"BLM","cc2":"BL","r":[{"n":"","c":""}]},{"cn":"Saint Helena","cc3":"SHN","cc2":"SH","r":[{"n":"","c":""}]},{"cn":"Saint Kitts and Nevis","cc3":"KNA","cc2":"KN","r":[{"n":"","c":""}]},{"cn":"Saint Lucia","cc3":"LCA","cc2":"LC","r":[{"n":"","c":""}]},{"cn":"Saint Martin","cc3":"MAF","cc2":"MF","r":[{"n":"","c":""}]},{"cn":"Saint Pierre and Miquelon","cc3":"SPM","cc2":"PM","r":[{"n":"","c":""}]},{"cn":"Saint Vincent and the Grenadines","cc3":"VCT","cc2":"VC","r":[{"n":"","c":""}]},{"cn":"Samoa","cc3":"WSM","cc2":"WS","r":[{"n":"","c":""}]},{"cn":"San Marino","cc3":"SMR","cc2":"SM","r":[{"n":"","c":""}]},{"cn":"Sao Tome and Principe","cc3":"STP","cc2":"ST","r":[{"n":"","c":""}]},{"cn":"Saudi Arabia","cc3":"SAU","cc2":"SA","r":[{"n":"","c":""}]},{"cn":"Senegal","cc3":"SEN","cc2":"SN","r":[{"n":"","c":""}]},{"cn":"Serbia","cc3":"SRB","cc2":"RS","r":[{"n":"","c":""}]},{"cn":"Seychelles","cc3":"SYC","cc2":"SC","r":[{"n":"","c":""}]},{"cn":"Sierra Leone","cc3":"SLE","cc2":"SL","r":[{"n":"","c":""}]},{"cn":"Singapore","cc3":"SGP","cc2":"SG","r":[{"n":"","c":""}]},{"cn":"Slovakia","cc3":"SVK","cc2":"SK","r":[{"n":"","c":""}]},{"cn":"Slovenia","cc3":"SVN","cc2":"SI","r":[{"n":"","c":""}]},{"cn":"Solomon Islands","cc3":"SLB","cc2":"SB","r":[{"n":"","c":""}]},{"cn":"Somalia","cc3":"SOM","cc2":"SO","r":[{"n":"","c":""}]},{"cn":"South Africa","cc3":"ZAF","cc2":"ZA","r":[{"n":"","c":""}]},{"cn":"South Georgia and the South Sandwich Islands","cc3":"SGS","cc2":"GS","r":[{"n":"","c":""}]},{"cn":"Spain","cc3":"ESP","cc2":"ES","r":[{"n":"A Coruna","c":"A Coruna"},{"n":"Alava","c":"Alava"},{"n":"Albacete","c":"Albacete"},{"n":"Alicante","c":"Alicante"},{"n":"Almeria","c":"Almeria"},{"n":"Asturias","c":"Asturias"},{"n":"Avila","c":"Avila"},{"n":"Badajoz","c":"Badajoz"},{"n":"Baleares","c":"Baleares"},{"n":"Barcelona","c":"Barcelona"},{"n":"Burgos","c":"Burgos"},{"n":"Caceres","c":"Caceres"},{"n":"Cadiz","c":"Cadiz"},{"n":"Cantabria","c":"Cantabria"},{"n":"Castellon","c":"Castellon"},{"n":"Ceuta","c":"Ceuta"},{"n":"Ciudad Real","c":"Ciudad Real"},{"n":"Cordoba","c":"Cordoba"},{"n":"Cuenca","c":"Cuenca"},{"n":"Girona","c":"Girona"},{"n":"Granada","c":"Granada"},{"n":"Guadalajara","c":"Guadalajara"},{"n":"Guipuzcoa","c":"Guipuzcoa"},{"n":"Huelva","c":"Huelva"},{"n":"Huesca","c":"Huesca"},{"n":"Jaen","c":"Jaen"},{"n":"La Rioja","c":"La Rioja"},{"n":"Las Palmas","c":"Las Palmas"},{"n":"Leon","c":"Leon"},{"n":"Lleida","c":"Lleida"},{"n":"Lugo","c":"Lugo"},{"n":"Madrid","c":"Madrid"},{"n":"Malaga","c":"Malaga"},{"n":"Melilla","c":"Melilla"},{"n":"Murcia","c":"Murcia"},{"n":"Navarra","c":"Navarra"},{"n":"Ourense","c":"Ourense"},{"n":"Palencia","c":"Palencia"},{"n":"Pontevedra","c":"Pontevedra"},{"n":"Salamanca","c":"Salamanca"},{"n":"Santa Cruz de Tenerife","c":"Santa Cruz de Tenerife"},{"n":"Segovia","c":"Segovia"},{"n":"Sevilla","c":"Sevilla"},{"n":"Soria","c":"Soria"},{"n":"Tarragona","c":"Tarragona"},{"n":"Teruel","c":"Teruel"},{"n":"Toledo","c":"Toledo"},{"n":"Valencia","c":"Valencia"},{"n":"Valladolid","c":"Valladolid"},{"n":"Vizcaya","c":"Vizcaya"},{"n":"Zamora","c":"Zamora"},{"n":"Zaragoza","c":"Zaragoza"}]},{"cn":"Sri Lanka","cc3":"LKA","cc2":"LK","r":[{"n":"","c":""}]},{"cn":"Sudan","cc3":"SDN","cc2":"SD","r":[{"n":"","c":""}]},{"cn":"Suriname","cc3":"SUR","cc2":"SR","r":[{"n":"","c":""}]},{"cn":"Svalbard and Jan Mayen","cc3":"SJM","cc2":"SJ","r":[{"n":"","c":""}]},{"cn":"Swaziland","cc3":"SWZ","cc2":"SZ","r":[{"n":"","c":""}]},{"cn":"Sweden","cc3":"SWE","cc2":"SE","r":[{"n":"","c":""}]},{"cn":"Switzerland","cc3":"CHE","cc2":"CH","r":[{"n":"Aargau","c":"AG"},{"n":"Appenzell Ausserrhoden","c":"AR"},{"n":"Appenzell Innerrhoden","c":"AI"},{"n":"Basel-Landschaft","c":"BL"},{"n":"Basel-Stadt","c":"BS"},{"n":"Bern","c":"BE"},{"n":"Freiburg","c":"FR"},{"n":"Genf","c":"GE"},{"n":"Glarus","c":"GL"},{"n":"Graubuenden","c":"GR"},{"n":"Jura","c":"JU"},{"n":"Luzern","c":"LU"},{"n":"Neuenburg","c":"NE"},{"n":"Nidwalden","c":"NW"},{"n":"Obwalden","c":"OW"},{"n":"Schaffhausen","c":"SH"},{"n":"Schwyz","c":"SZ"},{"n":"Solothurn","c":"SO"},{"n":"St. Gallen","c":"SG"},{"n":"Tessin","c":"TI"},{"n":"Thurgau","c":"TG"},{"n":"Uri","c":"UR"},{"n":"Valais","c":"VS"},{"n":"Vaud","c":"VD"},{"n":"Zug","c":"ZG"},{"n":"Zurich","c":"ZH"}]},{"cn":"Syrian Arab Republic","cc3":"SYR","cc2":"SY","r":[{"n":"","c":""}]},{"cn":"Taiwan","cc3":"TWN","cc2":"TW","r":[{"n":"","c":""}]},{"cn":"Tajikistan","cc3":"TJK","cc2":"TJ","r":[{"n":"","c":""}]},{"cn":"Tanzania, United Republic of","cc3":"TZA","cc2":"TZ","r":[{"n":"","c":""}]},{"cn":"Thailand","cc3":"THA","cc2":"TH","r":[{"n":"","c":""}]},{"cn":"Timor-Leste","cc3":"TLS","cc2":"TL","r":[{"n":"","c":""}]},{"cn":"Togo","cc3":"TGO","cc2":"TG","r":[{"n":"","c":""}]},{"cn":"Tokelau","cc3":"TKL","cc2":"TK","r":[{"n":"","c":""}]},{"cn":"Tonga","cc3":"TON","cc2":"TO","r":[{"n":"","c":""}]},{"cn":"Trinidad and Tobago","cc3":"TTO","cc2":"TT","r":[{"n":"","c":""}]},{"cn":"Tunisia","cc3":"TUN","cc2":"TN","r":[{"n":"","c":""}]},{"cn":"Turkey","cc3":"TUR","cc2":"TR","r":[{"n":"","c":""}]},{"cn":"Turkmenistan","cc3":"TKM","cc2":"TM","r":[{"n":"","c":""}]},{"cn":"Turks and Caicos Islands","cc3":"TCA","cc2":"TC","r":[{"n":"","c":""}]},{"cn":"Tuvalu","cc3":"TUV","cc2":"TV","r":[{"n":"","c":""}]},{"cn":"Uganda","cc3":"UGA","cc2":"UG","r":[{"n":"","c":""}]},{"cn":"Ukraine","cc3":"UKR","cc2":"UA","r":[{"n":"","c":""}]},{"cn":"United Arab Emirates","cc3":"ARE","cc2":"AE","r":[{"n":"","c":""}]},{"cn":"United Kingdom","cc3":"GBR","cc2":"GB","r":[{"n":"","c":""}]},{"cn":"United States","cc3":"USA","cc2":"US","r":[{"n":"Alabama","c":"AL"},{"n":"Alaska","c":"AK"},{"n":"American Samoa","c":"AS"},{"n":"Arizona","c":"AZ"},{"n":"Arkansas","c":"AR"},{"n":"Armed Forces Africa","c":"AF"},{"n":"Armed Forces Americas","c":"AA"},{"n":"Armed Forces Canada","c":"AC"},{"n":"Armed Forces Europe","c":"AE"},{"n":"Armed Forces Middle East","c":"AM"},{"n":"Armed Forces Pacific","c":"AP"},{"n":"California","c":"CA"},{"n":"Colorado","c":"CO"},{"n":"Connecticut","c":"CT"},{"n":"Delaware","c":"DE"},{"n":"District of Columbia","c":"DC"},{"n":"Federated States Of Micronesia","c":"FM"},{"n":"Florida","c":"FL"},{"n":"Georgia","c":"GA"},{"n":"Guam","c":"GU"},{"n":"Hawaii","c":"HI"},{"n":"Idaho","c":"ID"},{"n":"Illinois","c":"IL"},{"n":"Indiana","c":"IN"},{"n":"Iowa","c":"IA"},{"n":"Kansas","c":"KS"},{"n":"Kentucky","c":"KY"},{"n":"Louisiana","c":"LA"},{"n":"Maine","c":"ME"},{"n":"Marshall Islands","c":"MH"},{"n":"Maryland","c":"MD"},{"n":"Massachusetts","c":"MA"},{"n":"Michigan","c":"MI"},{"n":"Minnesota","c":"MN"},{"n":"Mississippi","c":"MS"},{"n":"Missouri","c":"MO"},{"n":"Montana","c":"MT"},{"n":"Nebraska","c":"NE"},{"n":"Nevada","c":"NV"},{"n":"New Hampshire","c":"NH"},{"n":"New Jersey","c":"NJ"},{"n":"New Mexico","c":"NM"},{"n":"New York","c":"NY"},{"n":"North Carolina","c":"NC"},{"n":"North Dakota","c":"ND"},{"n":"Northern Mariana Islands","c":"MP"},{"n":"Ohio","c":"OH"},{"n":"Oklahoma","c":"OK"},{"n":"Oregon","c":"OR"},{"n":"Pennsylvania","c":"PA"},{"n":"Puerto Rico","c":"PR"},{"n":"Rhode Island","c":"RI"},{"n":"South Carolina","c":"SC"},{"n":"South Dakota","c":"SD"},{"n":"Tennessee","c":"TN"},{"n":"Texas","c":"TX"},{"n":"Utah","c":"UT"},{"n":"Vermont","c":"VT"},{"n":"Virgin Islands","c":"VI"},{"n":"Virginia","c":"VA"},{"n":"Washington","c":"WA"},{"n":"West Virginia","c":"WV"},{"n":"Wisconsin","c":"WI"},{"n":"Wyoming","c":"WY"}]},{"cn":"United States Minor Outlying Islands","cc3":"UMI","cc2":"UM","r":[{"n":"","c":""}]},{"cn":"Uruguay","cc3":"URY","cc2":"UY","r":[{"n":"","c":""}]},{"cn":"Uzbekistan","cc3":"UZB","cc2":"UZ","r":[{"n":"","c":""}]},{"cn":"Vanuatu","cc3":"VUT","cc2":"VU","r":[{"n":"","c":""}]},{"cn":"Venezuela","cc3":"VEN","cc2":"VE","r":[{"n":"","c":""}]},{"cn":"Vietnam","cc3":"VNM","cc2":"VN","r":[{"n":"","c":""}]},{"cn":"Virgin Islands, British","cc3":"VGB","cc2":"VG","r":[{"n":"","c":""}]},{"cn":"Virgin Islands, U.S.","cc3":"VIR","cc2":"VI","r":[{"n":"","c":""}]},{"cn":"Wallis and Futuna Islands","cc3":"WLF","cc2":"WF","r":[{"n":"","c":""}]},{"cn":"Western Sahara","cc3":"ESH","cc2":"EH","r":[{"n":"","c":""}]},{"cn":"Yemen","cc3":"YEM","cc2":"YE","r":[{"n":"","c":""}]},{"cn":"Yugoslavia","cc3":"YUG","cc2":"YU","r":[{"n":"","c":""}]},{"cn":"Zaire","cc3":"ZAR","cc2":"ZR","r":[{"n":"","c":""}]},{"cn":"Zambia","cc3":"ZMB","cc2":"ZM","r":[{"n":"","c":""}]},{"cn":"Zimbabwe","cc3":"ZWE","cc2":"ZW","r":[{"n":"","c":""}]}];
		// ** CHECKOUT ** //
		FC.checkout.config.formFields = ["customer_first_name","customer_last_name","customer_email","customer_address1","customer_address2","customer_city","customer_state","customer_postal_code","customer_country","customer_phone","shipping_first_name","shipping_last_name","shipping_address1","shipping_address2","shipping_city","shipping_state","shipping_postal_code","shipping_country","shipping_phone","customer_company","shipping_company"];
		FC.checkout.config.hasMultiship = false;
		FC.checkout.config.multishipWeights = [];
		FC.checkout.config.multishipHandlingFees = [];
		FC.checkout.config.multishipFlatRateShipping = [];
		FC.checkout.config.orderShipping = 0;
		FC.checkout.config.orderFutureShipping = 0;
		FC.checkout.config.orderDiscount = 0;
		FC.checkout.config.orderHandlingFee = 0;
		FC.checkout.config.orderFutureHandlingFee = 0;
		FC.checkout.config.orderShipmentWeight = 0;
		FC.checkout.config.orderFutureShipmentWeight = 0;
		FC.checkout.config.orderFlatRateShipping = 0;
		FC.checkout.config.orderFutureFlatRateShipping = 0;
		FC.checkout.config.futureShippingOnly = false;
		FC.checkout.config.requiresSavedPaymentCard = false;
		FC.checkout.config.isUpdateCustomer = false;
		FC.checkout.config.isAuthenticated = false;
		FC.checkout.config.cvv2Required = true;
		FC.checkout.config.postedCheckout = false;
		FC.checkout.config.maskedCC = "";
		FC.checkout.config.CCexpMonth = "";
		FC.checkout.config.CCexpYear = "";
		FC.checkout.config.hasShippableProducts = false;
		FC.checkout.config.hasLiveRateShippableProducts = false;
		FC.checkout.config.shippingServiceId = 0;
		FC.checkout.config.hasSubscriptions = false;
		FC.checkout.config.storeDetails = {
			id: "6072",
			name: "CSS-Tricks",
			checkoutType: "default_account",
			shiptoAddressType: "",
			postalCode: "60647",
			stateCode: "IL",
			countryCode: "US",
			paymentGatewayType: "",
			supportsPayWithPlastic: false,
			supportsPaypalExpress: false,
			supportsPurchaseOrder: true,
			hasMultiplePaymentOptions: false
		};
		FC.checkout.config.weightUnit = "LBS";
		FC.checkout.config.lengthUnit = "IN";
		FC.checkout.config.customsValue = "0";
		FC.checkout.config.session = "fcsid=m1b5h4qff2o7qvcp1jbmsp3d74";
		FC.checkout.config.baseDirectory = "/v/0.6.0";
		FC.checkout.config.lang = {
			checkout_shipping_rate_error_retry: "Try Again",
			checkout_shipping_rate_error: "Error: This store has not been setup correctly to calculate shipping to this location with this weight. We apologize for the inconvenience. The store owner has been notified of this error.",
			checkout_enter_password: "Please enter your password.",
			checkout_no_account_enter_password: "That email address doesn\'t belong to any previously saved accounts. Please select \"create an account\" below if you\'d like to save your details for your next visit.",
			checkout_no_account_enter_password_account_only: "That email address doesn\'t belong to any previously saved accounts. Please enter a password below to create a new account.",
			checkout_instructions_email: "Please enter your email address.",
			checkout_instructions_email_checking: "Checking your email address...",
			checkout_updateinfo: "Please complete this checkout form in order to update your billing and payment information. Please note that updating your payment information will affect <em>all</em> active subscriptions being billed to this email address.",
			checkout_updateinfo_logged_in: "Your billing and payment information will be updated once you complete this form. Please note that updating your payment information will affect <em>all</em> active subscriptions being billed to this email address.",
			checkout_updateinfo_email_not_found: "There is no account for the email address you entered. Please enter a different email address.",
			checkout_sending_login_info: "Sending login info...",
			checkout_multiship_new_address: "-- New Address --",
			checkout_multiship_use_billing_address: "Use Billing Address",
			checkout_multiship_use_address: "Use Address",
			checkout_found_customer_info: "Your account was found from a previous transaction. You can enter your password below to retrieve your previously saved information, or you can checkout as a guest.",
			checkout_found_customer_info_account_only: "Your account was found from a previous transaction. Please enter your password below to retrieve your previously saved information.",
			checkout_found_customer_info_logged_in: "Your account information was retrieved successfully.",
			checkout_as_customer: "Create or use an Account",
			checkout_create_an_account: "Create an Account",
			checkout_as_returning_customer: "Use my previously saved account",
			checkout_sso_already_logged_in: "You are already logged in. If you\'d like to complete this transaction as a different user please logout and try again.",
			checkout_subscription_permission: "I give CSS-Tricks my permission to encrypt my card number and use it in the future to process my subscription.",
			checkout_error_incorrect_password: '<strong class=\"fc_error\">Incorrect Password: </strong><br />That email address looks correct, but the password is not. Please re-enter your password, or click the link below to have your password emailed to you.',
			checkout_confirm_password: "Please confirm your password.",
			checkout_password_sent_to: "Your password has been sent to ",
			checkout_subtotal: "Subtotal",
			checkout_flat_rate_shipping: "Flat Rate Shipping",
			checkout_tax: "Tax",
			checkout_shipment_total: "Shipment Total",
			checkout_error_passwords_do_not_match: "The passwords you entered do not match.",
			processing_text: "Processing your payment...",
			checkout_redirecting_to_paypal: "Redirecting to PayPal...",
			checkout_loading: "Loading..."
		};
		FC.checkout.config.futureActualTotalPrice = 0;
		
		jQuery(document).ready(function(){
			FC.checkout.init();
		});
		
	/* ]]> */
</script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="style12.css" />
</head>

<body id="checkout">
	<div id="pageContainer" style="width:760px; margin:0px auto;">
		
			<div id="fc_checkout_cart">
				
<!-- begin cart output -->
<div id="fc_cart_container"><div id="fc_cart_container_inner">
		<table id="fc_cart_table" cellspacing="0" cellpadding="0">
			<caption>Your Cart</caption>
			<thead>
				<tr id="fc_cart_head">
					<th id="fc_cart_head_item"><span>Item</span></th>
					<th id="fc_cart_head_quantity"><span>Quantity</span></th>
					<th id="fc_cart_head_price"><span>Price</span></th>
				</tr>
			</thead>
			<tfoot>
				<tr id="fc_cart_foot_subtotal">
					<td class="fc_col1" colspan="2" >Subtotal:</td>
					<td class="fc_col2">$0.00</td>
				</tr>
		
				<tr id="fc_cart_foot_shipping">
					<td class="fc_col1" colspan="2">Handling:</td>
					<td class="fc_col2">$0.00</td>
				</tr>
			
				<tr id="fc_cart_foot_total">
					<td class="fc_col1" colspan="2">Order Total:</td>
					<td class="fc_col2">$0.00</td>
				</tr>
			</tfoot>
		
				<tr class="fc_cart_item fc_cart_item_last">
					<td>Multi Product Order
					</td>
					<td class="fc_cart_item_quantity">
					</td>
					<td class="fc_cart_item_price">
						<span class="fc_cart_item_price_total"></span>
						<span class="fc_cart_item_price_each"></span>
					</td>
				</tr>
		</table>
</div></div><!-- #fc_cart_container_inner, #fc_cart_container -->
<!-- end cart output -->
			</div><!-- #fc_checkout_cart -->
		
		<div id="fc_checkout_container">
		<form id="fc_form_checkout" method="post" action="/checkout.php" onsubmit="return false;">
			<div id="fc_form_checkout_error" class="fc_error" style="display:none">Some required information is missing.</div>
				<div id="fc_cancel_continue_shopping">
					<input type="hidden" id="ThisAction" name="ThisAction" value="checkout" />
					<input type="hidden" id="customer_id" name="customer_id" value="0" />
					<input type="hidden" name="fcsid" value="m1b5h4qff2o7qvcp1jbmsp3d74" />
		<input type="hidden" name="fc_csrf_form" value="5sviXd2KfdbEu7PKJVX6BVqJPqSXSBgMYFWLMN" /><input type="hidden" name="fc_csrf_id" value="form" /><a href="http://localhost/dynamic/feature.html">Cancel and Continue Shopping</a>
				</div>
				<div id="fc_login_register_container" class="fc_fieldset_container ">
			<h2>Login or Register</h2>
			<fieldset id="fc_login_register">
				<legend>Login or Register</legend>
				
			<noscript>
				<div id="fc_error_noscript" class="fc_error">
					<h3>Warning:</h3>
					<p>Our checkout process requires javascript. Please <a href="http://www.foxycart.com/enabling-javascript" target="_blank">click here to enable javascript</a>. You may then click the checkout button below, or refresh this page to make changes to your cart.</p>
				</div><!-- #fc_errorNoScript -->
			</noscript>
			<div class="fc_inner">
		
					<ol id="fc_login_register_list">
								<li class="fc_row fc_customer_email" id="li_customer_email">
				<label for="customer_email" class="fc_pre">Email<span class="fc_ast">*</span></label>
				<input type="text" name="customer_email" id="customer_email" class="fc_text fc_text_long fc_required" autocomplete="off" value="" />				<label for="customer_email" class="fc_error" style="display:none;">Please enter a valid email address.</label>
						<p id="fc_account_message_status" class="fc_account_message">
							Please enter your email address.
						</p>
						<span id="login_ajax" style="display:none"><img src="ajax-loader.gif" alt="Loading..." /></span>
						<p id="fc_account_message_explanation" class="fc_account_message" style="display:none;"></p>			</li>
					<li class="fc_row fc_row_radio fc_guest_checkout">
						<label for="is_anonymous_1" class="fc_radio">
							<input type="radio" name="is_anonymous" value="1" id="is_anonymous_1" class="fc_radio" autocomplete="off" />
							<span>Checkout as a Guest</span>
						</label>
					</li>
				
					<li class="fc_row fc_row_radio fc_guest_checkout">
						<label for="is_anonymous_0" class="fc_radio">
							<input type="radio" name="is_anonymous" value="0" id="is_anonymous_0" class="fc_radio" checked='checked' autocomplete="off" />
							<span>Create or use an Account</span>
						</label>
					</li>
							<li class="fc_row fc_customer_password" style="display:none;" id="li_customer_password">
				<p id="fc_account_message_password" class="fc_account_message" style="display:none;"></p><label for="customer_password" class="fc_pre">Password</label>
				<input type="password" name="customer_password" id="customer_password" class="fc_text fc_text_long" autocomplete="off" value="" />				<label for="customer_password" class="fc_error" style="display:none;">Please enter a password.</label>			</li>			<li class="fc_row fc_customer_password2" style="display:none;" id="li_customer_password2">
				<label for="customer_password2" class="fc_pre">Retype Password</label>
				<input type="password" name="customer_password2" id="customer_password2" onchange="FC.checkout.checkPasswords()" class="fc_text fc_text_long" autocomplete="off" value="" />				<label for="customer_password2" class="fc_error" style="display:none;">Please enter your password again.</label>			</li>
					
				<li id="li_customer_email_password" class="fc_row" style="display:none">
					<label for="fc_email_password" class="fc_error"><a id="fc_email_password" href="javascript:;" onclick="FC.checkout.emailPassword()">Email me my password</a></label>
				</li>
				<li id="li_customer_new_password" class="fc_row" style="display:none">
					<label for="fc_new_password"><a id="fc_new_password" href="javascript:;" onclick="FC.checkout.newPassword()">Change my password</a></label>
				</li>
			</ol>
			<input type="hidden" name="email_found" id="email_found" value="false" />
			<div id="fc_continue" class="fc_row fc_row_actions"><a href="#" onclick="FC.checkout.checkLogin(); return false;" class="fc_link_nav fc_link_forward">Continue</a></div>
		
					
					<span class="fc_clear">&nbsp;</span>
				</div><!-- .fc_inner -->
			</fieldset><!-- #fc_login_register -->
			<span class="fc_clear">&nbsp;</span>
		</div><!-- #fc_login_register_container -->
		<div id="fc_data_entry_container"><div id="fc_customer_info_container">		<div id="fc_customer_billing_container" class="fc_fieldset_container ">
			<h2>Billing Address</h2>
			<fieldset id="fc_customer_billing">
				<legend>Billing Address</legend>
				<div class="fc_inner">
					<ol id="fc_customer_billing_list">
								<li class="fc_row fc_customer_country_name">
				<label for="customer_country_name" class="fc_pre">Country<span class="fc_ast">*</span></label>
				<input type="text" name="customer_country_name" id="customer_country_name" class="fc_text fc_text_long fc_required fc_location" value="India" />				<label for="customer_country_name" class="fc_error" style="display:none;">Please enter your country.</label>			</li>			<li class="fc_row fc_customer_first_name">
				<label for="customer_first_name" class="fc_pre">First Name<span class="fc_ast">*</span></label>
				<input type="text" name="customer_first_name" id="customer_first_name" class="fc_text fc_text_long fc_required" value="" />				<label for="customer_first_name" class="fc_error" style="display:none;">Please enter your first name.</label>			</li>			<li class="fc_row fc_customer_last_name">
				<label for="customer_last_name" class="fc_pre">Last Name<span class="fc_ast">*</span></label>
				<input type="text" name="customer_last_name" id="customer_last_name" class="fc_text fc_text_long fc_required" value="" />				<label for="customer_last_name" class="fc_error" style="display:none;">Please enter your last name.</label>			</li>			<li class="fc_row fc_customer_company">
				<label for="customer_company" class="fc_pre">Company</label>
				<input type="text" name="customer_company" id="customer_company" class="fc_text fc_text_long" value="" />				<label for="customer_company" class="fc_error" style="display:none;">Please enter your company</label>			</li>			<li class="fc_row fc_customer_address1">
				<label for="customer_address1" class="fc_pre">Address 1<span class="fc_ast">*</span></label>
				<input type="text" name="customer_address1" id="customer_address1" class="fc_text fc_text_long fc_required" value="" />				<label for="customer_address1" class="fc_error" style="display:none;">Please enter your address.</label>			</li>			<li class="fc_row fc_customer_address2">
				<label for="customer_address2" class="fc_pre">Address 2</label>
				<input type="text" name="customer_address2" id="customer_address2" class="fc_text fc_text_long" value="" />			</li>			<li class="fc_row fc_customer_city">
				<label for="customer_city" class="fc_pre">City<span class="fc_ast">*</span></label>
				<input type="text" name="customer_city" id="customer_city" class="fc_text fc_text_long fc_required" value="" />				<label for="customer_city" class="fc_error" style="display:none;">Please enter your city.</label>			</li>			<li class="fc_row fc_customer_state_name">
				<label for="customer_state_name" class="fc_pre">State / Province<span class="fc_ast">*</span></label>
				<input type="text" name="customer_state_name" id="customer_state_name" class="fc_text fc_text_long fc_required fc_location" value="" />				<label for="customer_state_name" class="fc_error" style="display:none;">Please enter your state or province.</label>			</li>			<li class="fc_row fc_customer_postal_code">
				<label for="customer_postal_code" class="fc_pre">Postal Code<span class="fc_ast">*</span></label>
				<input type="text" name="customer_postal_code" id="customer_postal_code" class="fc_text fc_text_short fc_required" value="" />				<label for="customer_postal_code" class="fc_error" style="display:none;">Please enter your postal code.</label>			</li>			<li class="fc_row fc_customer_phone">
				<label for="customer_phone" class="fc_pre">Phone</label>
				<input type="text" name="customer_phone" id="customer_phone" class="fc_text fc_text_long" value="" />				<label for="customer_phone" class="fc_error" style="display:none;">Please enter your phone number.</label>			</li>
					</ol>
					
					<span class="fc_clear">&nbsp;</span>
				</div><!-- .fc_inner -->
			</fieldset><!-- #fc_customer_billing -->
			<span class="fc_clear">&nbsp;</span>
		</div><!-- #fc_customer_billing_container -->
		<input type="hidden" name="customer_country" id="customer_country" value="IN" />
<input type="hidden" name="customer_state" id="customer_state" value="" />
		<div id="fc_address_shipping_container" class="fc_fieldset_container " style="display:none;">
			<h2>Shipping Address</h2>
			<fieldset id="fc_address_shipping">
				<legend>Shipping Address</legend>
				<div class="fc_inner">
					<ol id="fc_address_shipping_list">
								<li class="fc_row fc_shipping_country_name">
				<label for="shipping_country_name" class="fc_pre">Country<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_country_name" id="shipping_country_name" class="fc_text fc_text_long fc_required fc_location" value="India" />				<label for="shipping_country_name" class="fc_error" style="display:none;">Please enter your country.</label>			</li>			<li class="fc_row fc_shipping_first_name">
				<label for="shipping_first_name" class="fc_pre">First Name<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_first_name" id="shipping_first_name" class="fc_text fc_text_long fc_required" value="" />				<label for="shipping_first_name" class="fc_error" style="display:none;">Please enter your first name.</label>			</li>			<li class="fc_row fc_shipping_last_name">
				<label for="shipping_last_name" class="fc_pre">Last Name<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_last_name" id="shipping_last_name" class="fc_text fc_text_long fc_required" value="" />				<label for="shipping_last_name" class="fc_error" style="display:none;">Please enter your last name.</label>			</li>			<li class="fc_row fc_shipping_company">
				<label for="shipping_company" class="fc_pre">Company</label>
				<input type="text" name="shipping_company" id="shipping_company" class="fc_text fc_text_long" value="" />				<label for="shipping_company" class="fc_error" style="display:none;">Please enter your company</label>			</li>			<li class="fc_row fc_shipping_address1">
				<label for="shipping_address1" class="fc_pre">Address 1<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_address1" id="shipping_address1" class="fc_text fc_text_long fc_required" value="" />				<label for="shipping_address1" class="fc_error" style="display:none;">Please enter your address.</label>			</li>			<li class="fc_row fc_shipping_address2">
				<label for="shipping_address2" class="fc_pre">Address 2</label>
				<input type="text" name="shipping_address2" id="shipping_address2" class="fc_text fc_text_long" value="" />			</li>			<li class="fc_row fc_shipping_city">
				<label for="shipping_city" class="fc_pre">City<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_city" id="shipping_city" class="fc_text fc_text_long fc_required" value="" />				<label for="shipping_city" class="fc_error" style="display:none;">Please enter your city.</label>			</li>			<li class="fc_row fc_shipping_state_name">
				<label for="shipping_state_name" class="fc_pre">State / Province<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_state_name" id="shipping_state_name" class="fc_text fc_text_long fc_required fc_location" value="" />				<label for="shipping_state_name" class="fc_error" style="display:none;">Please enter your state or province.</label>			</li>			<li class="fc_row fc_shipping_postal_code">
				<label for="shipping_postal_code" class="fc_pre">Postal Code<span class="fc_ast">*</span></label>
				<input type="text" name="shipping_postal_code" id="shipping_postal_code" class="fc_text fc_text_short fc_required" value="" />				<label for="shipping_postal_code" class="fc_error" style="display:none;">Please enter your postal code.</label>			</li>			<li class="fc_row fc_shipping_phone">
				<label for="shipping_phone" class="fc_pre">Phone</label>
				<input type="text" name="shipping_phone" id="shipping_phone" class="fc_text fc_text_long" value="" />				<label for="shipping_phone" class="fc_error" style="display:none;">Please enter your phone number.</label>			</li>
					</ol>
					
					<span class="fc_clear">&nbsp;</span>
				</div><!-- .fc_inner -->
			</fieldset><!-- #fc_address_shipping -->
			<span class="fc_clear">&nbsp;</span>
		</div><!-- #fc_address_shipping_container -->
		<input type="hidden" name="shipping_country" id="shipping_country" value="IN" />
<input type="hidden" name="shipping_state" id="shipping_state" value="" />
</div><!-- #fc_customer_info_container -->		<div id="fc_shipping_container" class="fc_fieldset_container ">
			<h2>Shipping &amp; Subtotal</h2>
			<fieldset id="fc_shipping">
				<legend>Shipping &amp; Subtotal</legend>
				<div class="fc_inner">
					<ol id="fc_shipping_list">
								<li class="fc_row fc_subtotal">
				<label for="subtotal" class="fc_pre">Cart Subtotal</label>
				<input type="text" name="subtotal" id="subtotal" class="fc_text fc_text_short fc_text_readonly" readonly="readonly" onfocus="this.blur()" value="0.00" />			</li><input type="hidden" name="shipping_cost" id="shipping_cost" value="0" />			<li class="fc_row fc_tax">
				<label for="tax" class="fc_pre">Tax</label>
				<input type="text" name="tax" id="tax" class="fc_text fc_text_short fc_text_readonly" readonly="readonly" onfocus="this.blur()" value="0.00" />			</li>			<li class="fc_row fc_order_total">
				<label for="order_total" class="fc_pre">Order Total</label>
				<input type="text" name="order_total" id="order_total" class="fc_text fc_text_short fc_text_readonly" readonly="readonly" onfocus="this.blur()" value="0.00" />			</li>
					</ol>
					
					<span class="fc_clear">&nbsp;</span>
				</div><!-- .fc_inner -->
			</fieldset><!-- #fc_shipping -->
			<span class="fc_clear">&nbsp;</span>
		</div><!-- #fc_shipping_container -->
				<div id="fc_payment_container" class="fc_fieldset_container ">
			<h2>Payment</h2>
			<fieldset id="fc_payment">
				<legend>Payment</legend>
				<div class="fc_inner">
					<ol id="fc_payment_list">
					
				<li id="fc_payment_method_purchase_order_container" class="fc_row fc_row_payment_method">
			
					<label for="fc_payment_method_purchase_order" class="fc_radio">
						<input type="hidden" name="fc_payment_method" id="fc_payment_method_purchase_order" class="fc_radio" value="purchase_order" />
						<span>Pay by Purchase Order</span>
					</label>
			
				</li>
							<li id="li_purchase_order" class="fc_row li_purchase_order">
								<label for="purchase_order" class="fc_pre">
									PO Number
								</label>
								<input type="text" name="purchase_order" id="purchase_order" class="fc_text fc_required" value="" />
								<label for="purchase_order" class="fc_error" style="display:none">Please enter a purchase order for this transaction.</label>
							</li>
			
				<li id="li_nopayment" class="fc_row">
					No payment needed.
				</li>
		
					</ol>
					
			<div id="fc_complete_order_button_container" class="fc_row fc_row_actions">
				<button id="fc_complete_order_button" class="fc_button" type="button" value="Complete Your Purchase" onclick="FC.checkout.validateAndSubmit()">Complete Your Purchase</button>
			</div><!-- #fc_complete_order_button_container -->
		
					<span class="fc_clear">&nbsp;</span>
				</div><!-- .fc_inner -->
			</fieldset><!-- #fc_payment -->
			<span class="fc_clear">&nbsp;</span>
		</div><!-- #fc_payment_container -->
		</div><!-- #fc_data_entry_container -->
				</form>
				<span class="fc_clear">&nbsp;</span>
			</div><!-- #fc_checkout_container -->
		<!-- ###########################################################################
			END checkout
			########################################################################### -->
		
	</div>
</body>
</html>


<?php
mysql_connect("localhost","root","");
mysql_select_db("checkout");
if(isset($_POST['submit']))
{
$email=$_POST['Email'];
$country=$_POST['Country'];
$fname=$_POST['First Name'];
$LName=$_POST['Last Name'];
$comp=$_POST['Company'];
$Adder1=$_POST['Address 1'];
$Adder2=$_POST['Address 2'];
$city=$_POST['city'];
$State=$_POST['State / Province'];
$PCode=$_POST['Postal Code'];

$phone=$_POST['Phone'];
$CSubtotal=$_POST['Cart Subtotal'];
$tax=$_POST['Tax'];
$Ototal=$_POST['Order Total'];
$ponumber=$_POST['PO Number'];

$insert="insert into checkout(Email,Country,First name,Last name,Company,Address 1,Address 2,city, State/Province , Postal Code,Phone,Cart Subtotal,contact_no,password,Tax,Order Total,PO Number)values('$email','$country','$fname','$Lname','$comp','$Adder1','Adder2','$city','$State','$Pcode','$phone','$CSubtotal','$tax','$Ototal','$ponumber')";
echo $insert;
mysql_query($insert);
}
?>




