start:
	docker-compose up --build -d
db_init:
	docker-compose exec php php bin/install.php
