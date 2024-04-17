function factorial(n)
{
    if (n == 0)
        return 1;
    else
        return n * factorial(n - 1);
}

function fibonacci(n) { 
    if (n <= 1) 
        return n; 
    return fibonacci(n - 1) + fibonacci(n - 2); 
}