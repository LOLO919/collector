DOCKER = docker compose

up:
	$(DOCKER) up -d

down:
	$(DOCKER) down

logs:
	$(DOCKER) logs -f

php:
	$(DOCKER) exec backend bash
