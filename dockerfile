FROM python:3.9

WORKDIR /app

COPY .github /app/
COPY .idea /app/
COPY ./tests /app/
COPY .gitignore /app/
COPY dockerfile /app/
COPY fizzbuzz.py /app/
COPY main.py /app/
COPY requirements.txt /app/

RUN pip install -r requirements.txt

CMD ["python3", "fizzbuzz.py"]
