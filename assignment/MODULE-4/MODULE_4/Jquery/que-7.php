<!-- How We Can Select The Specified <li> Element From The ListOf <li>
Elements In <ul>?  -->


<ul id='js'>
    <li>t1</li>
    <li>t2</li>
    <li>t3</li>
</ul>

<script>
    let lis = document.getElementById('js').getElementsByTagName('li');
    console.log(lis);
</script>