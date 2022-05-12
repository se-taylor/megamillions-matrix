<script>
var t = '<table>',
    rows = 70,
    cols = 6,
    max = 45;
$('table td').each(function(){
    var c = 'high',
        t = $(this),
        val = parseInt( t.text().replace(/[^\d\.\-\ ]/g, '') );
    
    if (val <= max/1 ) { c = 'low'; }
    if (val > max/1.5 && val <= max/1) { c = 'medium'; }
    t.addClass(c);
});
</script>