<?php
namespace phpgt\dom\test;

class Helper {

const HTML = "<!doctype html><html><body><h1>Hello!</h1></body></html>";
const HTML_MORE = <<<HTML
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Test HTML</title>
</head>
<body>
	<h1>
		This HTML is for the unit test.
	</h1>
	<img src="header.jpg" />
	<a name="firstParagraph"></a>
	<p>There are a few elements in this document.</p>
	<p>This is so we can test different traversal methods.</p>
	<p class="plug">This package is a part of the phpgt webengine.</p>
	<h2 id="who" class="h-who m-before-p m-test">Who made this?</h2>
	<p>
		<a href="https://twitter.com/g105b">Greg Bowler</a> started this project
		to bring modern DOM techniques to the server side.
	</p>
	<a name="forms"></a>

	Here's some text that isn't contained within an element.

	<form>
		<input name="fieldA" type="text" />
		<input name="who" class="c1 c3" />
		<button type="submit">Submit</button>
	</form>
	<form>
		<input name="fieldB" type="text" class="c1 c2 c3 c4" />
		<img src="bottomForm.jpg" />
	</form>
</body>
</html>
HTML;
const HTML_NESTED = <<<HTML
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Test HTML</title>
</head>
<body>
	<div class="container">
		<div class="header">Lorem Header</div>
		<div class="body">
			<h1>Lorem Page</h1>
			<ul class="outer-list">
				<li class="outer-item-1">
					<div class="post outer">
						<h1>Lorem Title</h1>
						<div class="body">
							<p>Lorem Ipsum <a href="http://example.com">dolor sit</a></p>
						</div>
						<ul class="inner-list">
							<li class="inner-item-1">
								<div class="post inner">
									<h1>Lorem Title</h1>
									<div class="body">
										<p>Curabitur finibus imperdiet felis <a href="http://anotherexample.com">dolor sit</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
HTML;
const HTML_VALUE = <<<HTML
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Test HTML</title>
</head>
<body>

	<select id="select">
		<option value="1">One</option>
		<option value="2">Two</option>
	</select>

	<select id="select_optgroup">
		<option value="1">One</option>
		<option value="2">Two</option>
		<optgroup>
			<option value="3" selected>Three</option>
			<option value="4">Four</option>
		</optgroup>
	</select>

	<select id="select_selected">
		<option value="1">One</option>
		<option value="2" selected="selected">Two</option>
	</select>

	<select id="select_empty"></select>

</body>
</html>
HTML;
const XML = <<<XML
<?xml version="1.0" encoding="UTF-8" ?>
<breakfast-menu>
	<food>
		<name>Belgian Waffles</name>
		<price>$5.95</price>
		<description>two of our famous Belgian Waffles with plenty of real maple syrup</description>
		<calories>650</calories>
	</food>
	<food>
		<name>Strawberry Belgian Waffles</name>
		<price>$7.95</price>
		<description>light Belgian waffles covered with strawberrys and whipped cream</description>
		<calories>900</calories>
	</food>
	<food>
		<name>Berry-Berry Belgian Waffles</name>
		<price>$8.95</price>
		<description>light Belgian waffles covered with an assortment of fresh berries and whipped cream</description>
		<calories>900</calories>
	</food>
	<food>
		<name>French Toast</name>
		<price>$4.50</price>
		<description>thick slices made from our homemade sourdough bread</description>
		<calories>600</calories>
	</food>
	<food>
		<name>Homestyle Breakfast</name>
		<price>$6.95</price>
		<description>two eggs, bacon or sausage, toast, and our ever-popular hash browns</description>
		<calories>950</calories>
	</food>
</breakfast-menu>
XML;

}#