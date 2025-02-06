def fizzbuzz(n):
    """Retourne 'Fizz' si n est divisible par 3, 'Buzz' si divisible par 5, 
    'FizzBuzz' si divisible par 3 et 5, sinon retourne n."""
    if n % 3 == 0 and n % 5 == 0:
        return "FizzBuzz"
    elif n % 3 == 0:
        return "Fizz"
    elif n % 5 == 0:
        return "Buzz"
    else:
        return n
