FROM python:3.9

WORKDIR /app

COPY .github /app/.github
COPY .idea /app/.idea
COPY ./tests /app/tests
COPY .gitignore /app/
COPY dockerfile /app/
COPY fizzbuzz.py /app/
COPY main.py /app/
COPY requirements.txt /app/

RUN pip install -r requirements.txt

CMD ["pytest", "tests/fizzbuzzTest.py"]
