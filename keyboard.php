<?php
$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$link = preg_replace('/keyboard.php/', '', $path );
?>
<script type="text/javascript" src="<?php echo $link;?>js/IPA_buttons.js" />

<div class="ipa-buttons hover">
<div id="lang-switch" title="Click here to toggle variety">
	<div class="flag rp"></div>
	<div class="flag genam"></div>
</div>

<div class="float-left consonants">
<table>
	<tr>
	<td>
	<button type="button" value="Voiceless bilabial plosive">p</button>
	<button type="button" value="Voiced bilabial plosive">b</button>
	</td>
	<td></td>
	<td colspan="3">
	<button type="button" value="Voiceless alveolar plosive">t</button>
	<button type="button" value="Voiced alveolar plosive">d</button>
	</td>
	<td>
	<button type="button" value="Voiceless velar plosive">k</button>
	<button type="button" value="Voiced velar plosive">ɡ</button>
	</td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
		<tr>
	<td><button type="button" value="Voiced bilabial nasal">m</button></td>
	<td></td>
	<td colspan="3">
	<button type="button" value="Voiced alveolar nasal">n</button>
	</td>
	<td></td>
	<td>
	<button type="button" value="Voiced velar nasal">ŋ</button>
	</td>
	<td></td>
	<td></td>
	</tr>
		<tr>
	<td></td>
	<td>
	<button type="button" value="Voiceless labiodental fricative">f</button>
	<button type="button" value="Voiced labiodental fricative">v</button>
	</td>
	<td>
	<button type="button" value="Voiceless dental fricative">θ</button>
	<button type="button" value="Voiced dental fricative">ð</button>
	</td>
	<td>
	<button type="button" value="Voiceless alveolar fricative">s</button>
	<button type="button" value="Voiced alveolar fricative">z</button>
	</td>
	<td>
	<button type="button" value="Voiceless postalveolar fricative">ʃ</button>
	<button type="button" value="Voiced postalveolar fricative">ʒ</button>
	</td>
	<td></td>
	<td></td>
	<td>
	<button type="button" value="Voiceless velar fricative">h</button>
	</td>
	<td></td>
	</tr>
		<tr>
	<td></td>
	<td></td>
	<td colspan="3">
	<button type="button" value="Voiced postalveolar approximant">r</button>
	</td>
	<td><button type="button" value="Voiced palatal approximant">j</button></td>
	<td></td>
	<td></td>
	<td><button type="button" value="Voiced labial-velar approximant">w</button></td>
	</tr>
		<tr>
	<td></td>
	<td></td>
	<td colspan="3">
	<button type="button" value="Voiced alveolar lateral approximant">l</button>
	</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
</table>
</div>
<div class="float-left vowels">
<span class="group rp">
<button type="button" style="left: 15px; top: 0px;" value="Close front unrounded vowel">i</button>
<button type="button" style="left: 60px; top: 20px;" value="Close-mid front-centralised unrounded vowel">ɪ</button>
<button type="button" style="left: 45px; top: 65px;" value="Mid front unrounded vowel">e</button>
<button type="button" style="left: 80px; top: 120px;" value="Open front unrounded vowel">æ</button>
<button type="button" style="left: 115px; top: 100px;" value="Open-mid central unrounded vowel">ʌ</button>
<button type="button" style="left: 130px; top: 120px;" value="Open central unrounded vowel">a</button>
<button type="button" style="left: 155px; top: 120px;" value="Open back-centralised unrounded vowel">ɑ</button>
<button type="button" style="left: 175px; top: 105px;" value="Open-mid back rounded vowel">ɒ</button>
<button type="button" style="left: 140px; top: 20px;" value="Close-mid back-centralised rounded vowel">ʊ</button>
<button type="button" style="left: 170px; top: 45px;" value="Mid back rounded vowel">ɔ</button>
<button type="button" style="left: 145px; top: 0px;" value="Close back rounded vowel">u</button>
<button type="button" style="left: 110px; top: 65px;" value="Mid central unrounded vowel">ɜ</button>
<button type="button" style="left: 135px; top: 65px;" value="Mid central vowel">ə</button>
    </span>
<span class="group genam">
<button type="button" style="left: 20px; top: 0px;" value="Close front unrounded vowel">i</button>
<button type="button" style="left: 40px; top: 20px;" value="Close-mid front-centralized unrounded vowel">ɪ</button>
<button type="button" style="left: 45px; top: 55px;" value="Mid front unrounded vowel">e</button>
<button type="button" style="left: 70px; top: 100px;" value="Open front unrounded vowel">æ</button>
<button type="button" style="left: 120px; top: 90px;" value="Open-mid central unrounded vowel">ʌ</button>
<button type="button" style="left: 115px; top: 115px;" value="Open central unrounded vowel">a</button>
<button type="button" style="left: 150px; top: 115px;" value="Open back-centralized unrounded vowel">ɑ</button>
<button type="button" style="left: 150px; top: 60px;" value="Close-mid back rounded vowel">o</button>
<button type="button" style="left: 140px; top: 25px;" value="Close-mid back-centralized rounded vowel">ʊ</button>
<button type="button" style="left: 165px; top: 65px;" value="Mid back rounded vowel">ɔ</button>
<button type="button" style="left: 150px; top: 5px;" value="Close back rounded vowel">u</button>
<button type="button" style="left: 115px; top: 65px;" value="Mid central vowel">ə</button>
<button type="button" style="left: 15px; top: 120px;" value="Mid central vowel with rhoticity">ɚ</button>
<button type="button" style="left: 30px; top: 120px;" value="Mid central unrounded vowel with rhoticity">ɝ</button>
    </span>
</div>
<div class="float-left diacritics">
	<span class="group">
<button type="button" value="Long">ː</button>
<button type="button" value="Optional schwa">ᵊ</button>
<button type="button" value="Primary stress">ˈ</button>
<button type="button" value="Secondary stress">ˌ</button>
<button type="button" value="Slant bracket">/</button>
    </span>
</div>
<div class="preview">
<div class="symbol">&nbsp;
</div>
<div class="description">&nbsp;
</div>
</div>
</div>