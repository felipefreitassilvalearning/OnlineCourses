segundos = int(input("Por favor, entre com o número de segundos que deseja converter: "))
sr = segundos % 3600

a = segundos // 86400
b = segundos // 3600 % 24
c = sr // 60
d = sr % 60

print(a,"dias,",b,"horas,",c,"minutos e",d,"segundos")
