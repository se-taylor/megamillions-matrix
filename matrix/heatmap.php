<script>
var t = '<table>',
    rows = 70,
    cols = 8,
    max = 40;
$('table td').each(function(){
    var c = 'high',
        t = $(this),
        val = parseInt( t.text().replace(/[^\d\.\-\ ]/g, '') );
    
    if (val <= max/2 ) { c = 'low'; }
    if (val > max/2 && val <= max/1) { c = 'medium'; }
    t.addClass(c);
});
</script>