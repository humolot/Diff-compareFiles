<h1 id="diff-documentation">Diff-compareFiles</h1>

<h3>Comparing strings and files</h3>

<p>The compare function is used to compare two strings and determine the differences between them on a line-by-line basis. Setting the optional third parameter to true will change the comparison to be character-by-character. For example:</p>

<pre><code>// include the Diff class
require_once './class.Diff.php';

// compare two strings line by line
$diff = Diff::compare("line1\nline2", "lineA\nlineB");

// compare two strings character by character
$diff = Diff::compare('abcmnz', 'amnxyz', true);</code></pre>

<p>The compareFiles function behaves identically, except that its first two parameters are paths to files:</p>

<pre><code>// include the Diff class
require_once './class.Diff.php';

// compare two files line by line
$diff = Diff::compareFiles('old.txt', 'new.txt');

// compare two files character by character
$diff = Diff::compareFiles('old.bin', 'new.bin', true);</code></pre>

<h3>The differences array</h3>
<p>The result of calling the compare and compareFiles functions is an array. Each value in the array is itself an array containing two values. The first value is a line (or character, if the third parameter was set to true) from one of the strings or files being compared. The second value is one of the following three constants:</p>

<h3>Output functions</h3>

<p>The Diff class includes three output functions, which cover many use cases and often mean you will not need to process the differences array directly.

The toString function returns a string representation of the differences. The first parameter is the differences array, and the optional second parameter is the separator to use between lines of the output (by default, the newline character). For example:</p>

<pre><code>// include the Diff class
require_once './class.Diff.php';

// output the result of comparing two files as plain text
echo Diff::toString(Diff::compareFiles('old.txt', 'new.txt'));</code></pre>

<p>Each line in the resulting string is a line (or character) from one of the strings or files being compared, prefixed by two spaces, a minus sign and a space, or a plus sign and a space, indicating which string or file contained the lines. For example:</p>

<pre>
  An unmodified line
- A deleted line
+ An inserted line
</pre>

<p>The toHTML function behaves similarly to the toString function, except that unmodified, deleted, and inserted lines are wrapped in span, del, and ins elements respectively, and the default separator is <br>. For example:</p>

<pre><code>// include the Diff class
require_once './class.Diff.php';

// output the result of comparing two files as HTML
echo Diff::toHTML(Diff::compareFiles('old.txt', 'new.txt'));</code></pre>

<p>The toTable function produces a more advanced output, as shown in the example at the top of this page. It returns the code for an HTML table whose columns contain the text of the two strings or files. Each row corresponds either to a set of lines that have not been modified, or to a set of lines that have been deleted from the first string or file and a set of lines that have been added to the second string or file. The function takes three parameters: the differences array, an amount of extra indentation to use in each line of the resulting HTML (which defaults to no extra indentation), and a separator (which defaults to <br>). For example:</p>

<pre><code>// include the Diff class
require_once './class.Diff.php';

// output the result of comparing two files as a table
echo Diff::toTable(Diff::compareFiles('old.txt', 'new.txt'));</code></pre>

![alt text](https://github.com/humolot/Diff-compareFiles/blob/main/screenshot.png)



Enjoy :)
