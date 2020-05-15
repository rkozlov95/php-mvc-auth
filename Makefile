start:
	docker-compose up --build -d
init_db:
	docker-compose exec php php bin/install.php
