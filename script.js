function isPrime(number){
    var dem = 0;
    if(number>1)
    {
        for(i = 2;i<=(number/2);i++)
        {
            if(number % i == 0)
            {
                dem++;
            }
        }
        
        if(dem > 0){
            return 0;
        }
        return 1;
    }

    if(number<-1)
    {
        for(i = -2;i>=(number/2);i--)
        {
            if(number % i == 0)
            {
                dem++;
            }
        }

        if(dem > 0){
            return 0;
        }
        return 1;
    }
}
function isEven(number){
    if(number == 0)
        return -1;
    if(number % 2 == 0)
        return 1;
    return 0;
}