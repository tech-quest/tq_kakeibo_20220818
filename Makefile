.PHONY: migrate
migrate:
	./docker-compose-local.sh run php vendor/bin/phinx migrate -e development

.PHONY: rollback
rollback:
	./docker-compose-local.sh run php vendor/bin/phinx rollback -e development

# e.g. $ make add-migration FILENAME=AddUsersTable
.PHONY: add-migration
add-migration:
	./docker-compose-local.sh run php vendor/bin/phinx create $(FILENAME)