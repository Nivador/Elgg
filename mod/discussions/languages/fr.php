<?php

return array(
	'discussion' => 'Discussions',
	'discussion:add' => 'Ajouter un sujet de discussion',
	'discussion:latest' => 'Dernières discussions',
	'discussion:group' => 'Discussions de groupe',
	'discussion:none' => 'Pas de discussion',
	'discussion:reply:title' => 'Réponse de %s',
	'discussion:new' => "Ajouter un sujet de discussion",
	'discussion:updated' => "Derniere réponse de %s %s",

	'discussion:topic:created' => 'Le sujet de discussion a été créé.',
	'discussion:topic:updated' => 'Le sujet de discussion a été mis à jour.',
	'discussion:topic:deleted' => 'Le sujet de discussion a été supprimé.',

	'discussion:topic:notfound' => 'Le sujet de discussion est introuvable',
	'discussion:error:notsaved' => 'Impossible d\'enregistrer ce sujet',
	'discussion:error:missing' => 'Les deux champs \'titre\' et \'message\' sont obligatoires',
	'discussion:error:permissions' => 'Vous n\'avez pas les autorisations pour effectuer cette action',
	'discussion:error:notdeleted' => 'Impossible de supprimer le sujet de discussion',

	'discussion:reply:edit' => 'Modifier la réponse',
	'discussion:reply:deleted' => 'La réponse de la discussion a été supprimée.',
	'discussion:reply:error:notfound' => 'La réponse à cette discussion n\'a pas été trouvée',
	'discussion:reply:error:notfound_fallback' => "Désolé, le message spécifié n'a pu être trouvé. Vous avez été redirigé vers le sujet de discussion original.",
	'discussion:reply:error:notdeleted' => 'Impossible de supprimer la réponse de la discussion',

	'discussion:search:title' => 'Répondre au sujet : %s',

	/**
	 * Action messages
	 */
	'discussion:reply:missing' => 'Vous ne pouvez fournir une réponse vide.',
	'discussion:reply:topic_not_found' => 'Le sujet de discussion est introuvable',
	'discussion:reply:error:cannot_edit' => 'Vous n\'avez pas la permission de modifier cette réponse.',

	/**
	 * River
	 */
	'river:create:object:discussion' => '%s a ajouté un nouveau sujet de discussion %s',
	'river:reply:object:discussion' => '%s a répondu sur le sujet de discussion %s',
	'river:reply:view' => 'Afficher la réponse',

	/**
	 * Notifications
	 */
	'discussion:topic:notify:summary' => 'Nouveau sujet de discussion appelé %s',
	'discussion:topic:notify:subject' => 'Nouveau sujet de discussion : %s',
	'discussion:topic:notify:body' =>
'%s a ajouté un nouveau sujet de discussion à %s :

%s

Voir et répondre à la discussion :
%s
',

	'discussion:reply:notify:summary' => 'Nouvelle réponse au sujet : %s',
	'discussion:reply:notify:subject' => 'Nouvelle réponse au sujet : %s',
	'discussion:reply:notify:body' =>
'%s a ajouté un nouveau sujet de discussion à %s :

%s

Voir et répondre à la discussion :
%s
',

	'item:object:discussion' => "Sujets de discussion",
	'item:object:discussion_reply' => "Réponses à la discussion",

	'groups:enableforum' => 'Activer les discussions de groupe',

	'reply:this' => 'Répondre à ça',

	/**
	 * ecml
	 */
	'discussion:ecml:discussion' => 'Discussions du groupe',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => 'Statut du sujet',
	'discussion:topic:closed:title' => 'Cette discussion est fermée.',
	'discussion:topic:closed:desc' => 'Cette discussion a été fermée et n\'accepte plus de nouveaux commentaires.',

	'discussion:replies' => 'Réponses',
	'discussion:addtopic' => 'Ajouter un sujet',
	'discussion:post:success' => 'Votre réponse a été publié avec succès',
	'discussion:post:failure' => 'Il y a eu un problème lors de la publication de votre réponse',
	'discussion:topic:edit' => 'Modifier le sujet',
	'discussion:topic:description' => 'Message du sujet',

	'discussion:reply:edited' => "Vous avez modifié ce billet avec succés.",
	'discussion:reply:error' => "Il y a eu un problème lors de la modification du billet.",
);
