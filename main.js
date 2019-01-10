var c = 1;
function myFunction() {
    switch (c) {
        case 1:
            document.getElementById("Traveller2").style.display = 'block';
            break;
        case 2:
            document.getElementById("Traveller3").style.display = 'block';
            break;
        case 3:
            document.getElementById("Traveller4").style.display = 'block';
            break;
        case 4:
            document.getElementById("Traveller5").style.display = 'block';
            break;
        case 5:
            document.getElementById("Traveller6").style.display = 'block';
            break;
        case 6:
            document.getElementById("Traveller7").style.display = 'block';
            break;
        case 7:
            document.getElementById("Traveller8").style.display = 'block';
            break;
        case 8:
            document.getElementById("Traveller9").style.display = 'block';
            break;
        case 9:
            alert('No more passengers can be added');
            break;
    }
    c++
}
function removePass2()
{
    document.getElementById("Traveller2").style.display='none';
    c=1;
}
function removePass3()
{
    document.getElementById("Traveller3").style.display='none';
    c=2;
}
function removePass4()
{
    document.getElementById("Traveller4").style.display='none';
    c=3;
}
function removePass5()
{
    document.getElementById("Traveller5").style.display='none';
    c=4;
}
function removePass6()
{
    document.getElementById("Traveller6").style.display='none';
    c=5;
}
function removePass7()
{
    document.getElementById("Traveller7").style.display='none';
    c=6;
}
function removePass8()
{
    document.getElementById("Traveller8").style.display='none';
    c=7;
}
function removePass9()
{
    document.getElementById("Traveller9").style.display='none';
    c=8;
}